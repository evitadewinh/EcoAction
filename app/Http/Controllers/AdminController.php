<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\donate;
use App\Models\feedback;
use App\Models\Volunteer;
use App\Models\volunteers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Education;


class AdminController extends Controller
{
    public function index()
    {
        $users = User::count();
        $volunteers = Volunteers::count();
        $articles = Article::count();
        $feedback = feedback::count();
        $donations = donate::count();
        $educations = Education::count();

        return view('dashboard.home', compact('users', 'volunteers', 'articles', 'feedback', 'donations', 'educations'));
    }

    public function users()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    public function volunteers()
    {
        $volunteers = volunteers::all();
        return view('dashboard.volunteers', compact('volunteers'));
    }

    public function donations()
    {
        $donations = donate::all();

        return view('dashboard.donations', compact('donations'));
    }
    public function donate()
    {
        return view('dashboard.donations');
    }
    public function feedback()
    {
        $feedback = feedback::all();
        return view('dashboard.feedback', compact('feedback'));
    }

    public function articles()
    {
        $articles = Article::all();
        return view('dashboard.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('dashboard.articles.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:articles|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Simpan gambar
            // Simpan gambar
            $path = $request->file('image')->store('article_images', 'public');
            // Tambahkan ini untuk debugging
            // dd($path); // Cek apakah path sesuai dengan yang diharapkan


            // Simpan artikel ke dalam basis data
            $article = new Article();
            $article->title = $request->title;
            $article->description = $request->description;
            $article->image = $path; // Pastikan $path sesuai dengan yang diunggah
            $article->save();

            return redirect()->route('dashboard.articles')->with('success', 'Artikel berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Tangani exception di sini, misalnya log dan kembalikan pesan kesalahan
            dd($e->getMessage());
        }
    }


    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        return view('dashboard.articles.edit', compact('articles'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:articles,title,' . $id,
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('articles.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Temukan artikel yang akan diperbarui
        $articles = Article::findOrFail($id);
        $articles->title = $request->title;
        $articles->description = $request->description;

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            Storage::delete('public/' . $articles->image);

            // Simpan gambar baru ke dalam storage
            $path = $request->file('image')->store('article_image', 'public');
            $articles->image = $path;
        }

        // Simpan perubahan artikel
        $articles->save();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard.articles')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $articles = Article::findOrFail($id);

        // Hapus gambar terkait
        Storage::delete('public/' . $articles->image);

        $articles->delete();

        return redirect()->route('dashboard.articles')->with('success', 'Artikel berhasil dihapus.');
    }



    //detail article admin

    public function show($articleId)
    {
        // Temukan artikel berdasarkan ID
        $article = Article::findOrFail($articleId);

        // Ambil jumlah volunteer yang terdaftar untuk artikel ini
        $volunteerCount = Volunteers::where('article_id', $articleId)->count();
        // dd($volunteerCount);

        // Tampilkan view detail artikel dengan data artikel dan jumlah volunteer
        return view('dashboard.articles.show', compact('article', 'volunteerCount'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('dashboard.educations.index', compact('educations'));
    }

    public function create()
    {
        return view('dashboard.educations.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:educations|max:255',
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
            $path = $request->file('image')->store('education_images', 'public');

            // Simpan education ke dalam basis data
            $education = new Education();
            $education->title = $request->title;
            $education->description = $request->description;
            $education->image = $path;
            $education->save();

            return redirect()->route('dashboard.educations.index')->with('success', 'Education berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Tangani exception di sini, misalnya log dan kembalikan pesan kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan education.')->withInput();
        }
    }

    public function edit($id)
    {
        $educations = Education::findOrFail($id);
        return view('dashboard.educations.edit', compact('educations'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:educations,title,' . $id,
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('educations.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Temukan education yang akan diperbarui
        $education = Education::findOrFail($id);
        $education->title = $request->title;
        $education->description = $request->description;

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            Storage::delete('public/' . $education->image);

            // Simpan gambar baru ke dalam storage
            $path = $request->file('image')->store('education_images', 'public');
            $education->image = $path;
        }

        // Simpan perubahan education
        $education->save();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard.educations.index');
    }

    public function destroy($id)
    {
        $education = Education::findOrFail($id);

        // Hapus gambar terkait
        Storage::delete('public/' . $education->image);

        $education->delete();

        return redirect()->route('dashboard.educations.index')->with('success', 'Education berhasil dihapus.');
    }

    public function show($educationId)
    {
        // Temukan education berdasarkan ID
        $education = Education::findOrFail($educationId);

        // Tampilkan view detail education
        return view('dashboard.educations.show', compact('education'));
    }


    public function showdetail($id)
    {
        $education = Education::findOrFail($id);
        return view('educationdetail', compact('education'));
    }

}
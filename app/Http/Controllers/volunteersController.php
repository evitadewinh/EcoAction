<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\volunteers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class volunteersController extends Controller
{
    public function formVolunteer ($id){
        $article = Article::findOrFail($id);
        return view('form_volunteers', compact('article'));
    }
    public function addVolunteer(Request $request)
    {
        $user = Auth::user();

        // Cari artikel berdasarkan judul
        $article = Article::where('title', $request->article)->first();

        if (!$article) {
            // Artikel tidak ditemukan, tangani di sini (misalnya kembalikan dengan pesan kesalahan)
            return back()->withError('Artikel tidak ditemukan.');
        }

        // Buat volunteer baru
        $volunteer = Volunteers::create([
            'user_id' => $user->id,
            'article_id' => $article->id,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'state' => $request->state,
            'postal' => $request->postal,
        ]);
        $users = Auth::user();
        // Redirect ke halaman selamat datang (welcomeuser)
        return redirect('/welcome');
    }

    public function destroy($id)
    {
        $volunters = volunteers::findOrFail($id);

        $volunters->delete();

        return redirect()->route('dashboard.volunteers')->with('success', 'Volunteer berhasil dihapus.');
    }
}
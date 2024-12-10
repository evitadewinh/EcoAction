<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class articles extends Controller
{
    public function detailArticle($id)
    {
        // Ambil artikel berdasarkan ID
        $article = Article::findOrFail($id);

        // Hitung jumlah volunteer yang terkait dengan artikel ini
        $volunteerCount = $article->volunteers()->count();

        // Kirim artikel dan jumlah volunteer ke view
        return view('artikel_detail', compact('article', 'volunteerCount'));
    }
}
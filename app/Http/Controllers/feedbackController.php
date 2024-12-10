<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class feedbackController extends Controller
{
    public function store(Request $request){
        $feedback = feedback::create([
            'fullname'=> $request->fullname,
            'feedback'=> $request->feedback,
            'email'=> $request->email,
        ]);
        $users = Auth::user();
        return redirect('/welcome');
    }
    public function destroy($id){
        $feedback = feedback::findOrFail($id);

        $feedback->delete();

        return redirect()->route('dashboard.feedback')->with('success', 'Volunteer berhasil dihapus.');
    }
}
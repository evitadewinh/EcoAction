<?php

namespace App\Http\Controllers;

use App\Models\donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class donateController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function history()
{
    $donations = donate::all();
    return view('history-donation', compact('donations'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate form data
    $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'country' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'street' => 'required|string|max:255',
        'donation' => 'required|numeric|min:1',
        'proof' => 'required|file|mimes:jpg,jpeg,png,pdf',
    ]);

    // Process and save the donation data
    $donate = new Donate();
    $donate->fname = $request->input('fname');
    $donate->lname = $request->input('lname');
    $donate->email = $request->input('email');
    $donate->country = $request->input('country');
    $donate->city = $request->input('city');
    $donate->street = $request->input('street');
    $donate->donation = $request->input('donation');

    // Save the uploaded proof of donation
    if ($request->hasFile('proof')) {
        $file = $request->file('proof');
        $proofName = time() . '_' . $file->getClientOriginalName(); // Menggunakan nama asli file dengan penambahan timestamp
        if ($file->move(public_path('uploads/proofUploads'), $proofName)) {
            $donate->proof = $proofName;
        } else {
            return response()->json(['success' => false, 'message' => 'Failed to save proof file. Please try again.'], 500);
        }
    } else {
        return response()->json(['success' => false, 'message' => 'Proof file is required.'], 400);
    }
    
    if ($donate->save()) {
        return response()->json(['success' => true, 'donation_id' => $donate->id]);
    } else {
        return response()->json(['success' => false, 'message' => 'Failed to save donation data. Please try again.'], 500);
    }
}

    
    

    /**
     * Display the specified resource.
     */
    public function donationHistory($donationId)
    {
        $donation = Donate::findOrFail($donationId);
        return view('history-donation', compact('donation'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'fname' => 'required|string|max:255',
    //         'lname' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'country' => 'required|string|max:255',
    //         'city' => 'required|string|max:255',
    //         'donation' => 'required|numeric|min:1',
    //         'proof' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    //     ]);
    
    //     $donation = Donate::find($id);
    //     if (!$donation) {
    //         return redirect()->route('donations.index')->with('error', 'Donation not found');
    //     }
    
    //     $donation->fname = $request->fname;
    //     $donation->lname = $request->lname;
    //     $donation->email = $request->email;
    //     $donation->country = $request->country;
    //     $donation->city = $request->city;
    //     $donation->donation = $request->donation;
    
    //     // Jika ada file proof baru di-upload
    //     if ($request->hasFile('proof')) {
    //         // Hapus proof lama jika ada
    //         if ($donation->proof) {
    //             Storage::delete('uploads/proofUploads/' . $donation->proof);
    //         }
    
    //         // Upload proof baru
    //         $proofPath = $request->file('proof')->store('proofUploads', 'public');
    //         $donation->proof = $proofPath;
    //     }
    
    //     $donation->save();
    
    //     return redirect()->route('dashboard.donations')->with('success', 'Donation updated successfully');
    // }
    
    public function destroy($id)
    {
        $donation = Donate::find($id);
        if (!$donation) {
            return redirect()->route('dasboard.donations')->with('error', 'Donation not found');
        }
    
        // Hapus file proof dari storage jika ada
        if ($donation->proof) {
            Storage::delete('uploads/proofUploads/' . $donation->proof);
        }
    
        $donation->delete();
    
        return redirect()->route('dashboard.donations')->with('success', 'Donation deleted successfully');
    }
    
}

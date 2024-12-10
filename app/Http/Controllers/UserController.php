<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Education;

class UserController extends Controller
{
    public function index(){
        $users = Auth::user();
        $educations = Education::all();

        // Periksa apakah $users tidak ada
        if(!$users) {
            // Jika tidak ada $users, redirect ke ("/")
            return redirect('/');
        }

        // Jika ada $users, tampilkan view 'welcomeuser'
        return view('welcomeuser', compact('users', 'educations'));
    }

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->intended('/welcome');
            }
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function register()
    {
        return view('register');
    }
    public function donate()
    {
        $users = Auth::user();

        return view('donate', compact('users'));
    }

    public function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'user'
        ]);

        return redirect('/login');
    }
    public function Logout() {
        Auth::logout();
        $educations = Education::all();
        return view('welcome',compact('educations'));
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->route('dashboard.users')->with('success', 'User berhasil dihapus.');
    }
    public function editUser ($id){
        $Users = User::find($id);
        return view('dashboard.usersedit', compact('Users'));
    }
    public function updateUser(Request $request, $id)
        {
            $Users = User::findOrFail($id);
            $Users->name = $request->input('name');
            $Users->email = $request->input('email');
            $Users->role = $request->input('role');
            $Users->update();
            return redirect()->route('dashboard.users')->with('success', 'User berhasil diupdate.');
        }
        public function edit ($id){
            $user = User::find($id);
            return view('edit', compact('user'));
        }
        public function update(Request $request, $id)
        {
            $Users = User::findOrFail($id);
            $Users->name = $request->input('name');
            $Users->email = $request->input('email');
            $Users->update();
            return redirect()->intended('/welcome')->with('success', 'User berhasil diupdate.');
        }
}

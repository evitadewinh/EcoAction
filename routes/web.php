<?php

use App\Http\Controllers\feedbackController;
use App\Models\User;
use App\Models\Article;
use App\Http\Controllers\articles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\volunteersController;
use App\Http\Controllers\donateController;
use App\Models\Education;
use App\Http\Controllers\EducationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $educations = Education::all();
    // dd($educations);
    return view('welcome', compact('educations'));
});


Route::get('/volunteer', function () {
    $articles = Article::all();
    return view('volunteer', compact('articles'));
})->name('volunteer');

Route::post('/volunteer',[volunteersController::class, 'addVolunteer'])->name('volunteer.add');

Route::get('article/{id}/form', [volunteersController::class, 'formVolunteer'])->name('article.form');
Route::post('/welcome',[feedbackController::class,'store'])->name('feedback.add');
Route::post('/donations',[donateController::class,'store'])->name('store');

Route::get('article/{id}', [articles::class, 'detailArticle'])->name('article.detail');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/volunteers', [AdminController::class, 'volunteers'])->name('dashboard.volunteers');
    Route::delete('/volunteer/{id}',[volunteersController::class, 'destroy'])->name('volunteer.destroy');

    Route::get('/donations', [AdminController::class, 'donations'])->name('dashboard.donations');
    Route::get('/feedback', [AdminController::class, 'feedback'])->name('dashboard.feedback');
    Route::delete('/feedback/{id}',[feedbackController::class,'destroy'])->name('feedback.destroy');

    Route::get('/users', [AdminController::class, 'users'])->name('dashboard.users');
    Route::put('/users/{id}', [UserController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    Route::get('/articles', [AdminController::class, 'articles'])->name('dashboard.articles');
    Route::get('/articles/create', [AdminController::class, 'create'])->name('articles.create');
    Route::post('/articles', [AdminController::class, 'store'])->name('articles.store');
    Route::get('/articles/{id}/edit', [AdminController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [AdminController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{id}', [AdminController::class, 'destroy'])->name('articles.destroy');
    Route::get('/admin/articles/{id}', [AdminController::class, 'show'])->name('admin.articles.show');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/welcome', 'index');
    Route::get('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister')->name('doRegister');
    Route::delete('/users/{id}', 'destroy')->name('users.destroy');
    Route::get('/users/edit/{id}', 'editUser')->name('users.edit');
    Route::put('/edit/{id}', 'update')->name('update');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/donate', 'donate')->name('donate');
});

Route::get('/donation-history/{donationId}', [donateController::class, 'donationHistory'])->name('donation-history');
// Route::put('/donations/{id}', [donateController::class, 'donationHistory'])->name('donations.update');
Route::delete('/donations/{id}', [donateController::class, 'destroy'])->name('donations.destroy');



Route::get('/educations', [EducationController::class, 'index'])->name('dashboard.educations.index');
Route::get('/educations/create', [EducationController::class, 'create'])->name('dashboard.educations.create');
Route::post('/educations', [EducationController::class, 'store'])->name('dashboard.educations.store');
Route::get('/educations/{id}/edit', [EducationController::class, 'edit'])->name('dashboard.educations.edit');
Route::put('/educations/{id}', [EducationController::class, 'update'])->name('dashboard.educations.update');
Route::delete('/educations/{id}', [EducationController::class, 'destroy'])->name('dashboard.educations.destroy');
Route::get('/educations/{id}', [EducationController::class, 'show'])->name('dashboard.educations.show');

// routes/web.php
Route::get('/educationss/{id}', [EducationController::class, 'showdetail'])->name('educations.show');

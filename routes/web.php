<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        "name" => "Maha Dewa MM",
        "email" => "mahadewamm109@gmail.com",
        "image" => "profil.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
//single web for post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//halaman home/beranda
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

//halaman about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Samudra Panji Nugroho",
        "active" => "about",
        "image" => "profile.png",
        "email" => "samwitchwicki@gmail.com",
    ]);
});

//halaman semua blog post
Route::get('/posts', [PostController::class, 'index']);


//halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

//halaman semua jenis kategori
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

//halaman per author/user
Route::get('/author/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load(['user', 'category'])
    ]);
});

//halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
//menangani user login pada halaman login
Route::post('/login', [LoginController::class, 'authenticate']);
//menangani user ketika logout
Route::post('/logout', [LoginController::class, 'logout']);

//halaman login
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//menangani registrasi user pada halaman register
Route::post('/register', [RegisterController::class, 'store']);

//halaman dashhboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
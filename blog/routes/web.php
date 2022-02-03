<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\MatchesController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/matches', [MatchesController::class, 'index'])->name('matches.index');
Route::get('/matches/{match:id}', [MatchesController::class, 'show'])->name('matches.show');

Route::post('/newsletter', NewsletterController::class);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store']);

require __DIR__ . '/auth.php';

//Route::group(['prefix' => 'adminboard', 'middleware' => 'admin', 'namespace' => 'Admin'], function () {
//    Route::resource('/posts', 'PostsController')->name('posts');
//});
//
//Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');
//
//Route::get('welcome', function () {return view('welcome');})->name('welcome');

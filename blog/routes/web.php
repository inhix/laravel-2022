<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/newsletter', NewsletterController::class);

Route::get('/posts', [PostController::class, 'index'])->name('blog.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store']);

require __DIR__ . '/auth.php';

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

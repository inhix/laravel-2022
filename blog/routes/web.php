<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/blog', [PostController::class, 'blog'])->name('blog');
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::post('/blog/{post:slug}/comments', [CommentController::class, 'store']);

require __DIR__.'/auth.php';

Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');
Route::get('welcome', function () {return view('welcome');})->name('welcome');

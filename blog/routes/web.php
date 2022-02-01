<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/blog', [PostController::class, 'blog'])->name('blog');

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

require __DIR__.'/auth.php';

Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');

Route::get('welcome', function () {return view('welcome');})->name('welcome');

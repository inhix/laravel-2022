<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/blog', [PostController::class, 'blog'])->name('blog');

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

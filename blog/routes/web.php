<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/blog', [PostController::class, 'blog'])->name('blog');

Route::get('news/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'posts' => $category->posts,
        'categories' => Category::all(),
        'currentCategory' => $category
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('blog', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});

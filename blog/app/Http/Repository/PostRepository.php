<?php

namespace App\Http\Repository;

use App\Models\Post;

class PostRepository extends Repository implements HomeRepositoryInterface
{
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function getForBlog()
    {
        return $this->model->latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString();
    }

    public function getForHome()
    {
        return $this->model->latest()->take(4)->get();
    }
}

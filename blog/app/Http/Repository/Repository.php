<?php

namespace App\Http\Repository;

 class Repository
{
    protected $model = null;

    public function getAll()
    {
        return $this->model->all();
    }

    public function getBySlug(string $slug)
    {
        return $this->model->whereSlug($slug)->first();
    }

    public function getByField($field, $value)
    {
        return $this->model->where($field, $value)->get();
    }

    public function find(string $id)
    {
        return $this->model->find($id);
    }
}

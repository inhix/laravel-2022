<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'nickname', 'photo', 'content', 'number'];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

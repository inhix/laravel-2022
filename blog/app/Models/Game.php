<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'score', 'opponent_name', 'opponent_logo', 'tournament', 'start_time'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'poster', 'title', 'author', 'genre', 'year'
    ];
}

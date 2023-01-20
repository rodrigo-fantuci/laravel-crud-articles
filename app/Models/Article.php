<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that should be mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'liked',
    ];

}


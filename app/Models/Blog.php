<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'cover_image',
        'published_at'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'author_id',
        'title',
        'details',
        'is_featured',
        'total_read',
        'status',
        'image',
    ];

}

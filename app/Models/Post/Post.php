<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}

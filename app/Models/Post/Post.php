<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Post\Category');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Models\Post\tag');
    }
}

<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post\Post');
    }
}

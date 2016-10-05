<?php

namespace App\Http\Controllers\Page;
use App\Models\Post\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function getSingle($slug)
    {
        $post = Post::where('slug', '=' , $slug)->first();
        return view('blog.single', compact('post'));
    }
}

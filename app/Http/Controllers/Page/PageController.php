<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Models\Post\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome', compact('posts'));
    }

    public function getAbout() {
        $firstName = 'Chris';
        $lastName = 'Su';
        return view('pages.about', compact('firstName','lastName'));
    }

    public function getContact() {
        return view('pages.contact');
    }
}

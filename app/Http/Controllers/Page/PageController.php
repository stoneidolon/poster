<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getIndex() {
        return view('pages.welcome');
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

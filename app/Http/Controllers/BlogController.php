<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.blog-home');
    }

    public function blogpost1()
    {
        return view('blogs.blog-post1');
    }

 
}

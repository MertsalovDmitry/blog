<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index()
    {
        $title = "Blog";
        return view('blog.blog.index')->withTitle($title);
    }

    public function post()
    {
        $title = "Single Blog Post";
        return view('blog.blog.details')->withTitle($title);
    }
}

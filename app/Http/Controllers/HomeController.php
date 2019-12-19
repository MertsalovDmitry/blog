<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "mertsalov";
        return view('blog.index')->withTitle($title);
    }
}

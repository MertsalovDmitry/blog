<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HomeController extends Controller
{
    public function index()
    {
        $title = "mertsalov";
        $heroes  = Hero::whereActive(true)->get();
        return view('blog.index')->withTitle($title)
                                 ->withHeroes($heroes);
    }
}

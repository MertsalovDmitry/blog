<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {   
        $title = "Portfolio";
        return view('blog.portfolio.index')->withTitle($title);
    }
}

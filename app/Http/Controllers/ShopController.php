<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {   
        $title = "Shop";
        return view('blog.shop.index')->withTitle($title);
    }
}

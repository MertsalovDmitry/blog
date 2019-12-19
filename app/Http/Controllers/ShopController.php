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

    public function cart()
    {   
        $title = "Cart";
        return view('blog.shop.cart')->withTitle($title);
    }

    public function checkout()
    {   
        $title = "Checkout";
        return view('blog.shop.checkout')->withTitle($title);
    }

    public function details()
    {   
        $title = "Details";
        return view('blog.shop.details')->withTitle($title);
    }
}

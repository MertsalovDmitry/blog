<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ShopController extends Controller
{
    public function index()
    {   
        $title = "Shop";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.index')->withTitle($title)
                                      ->withContacts($contacts);
    }

    public function cart()
    {   
        $title = "Cart";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.cart')->withTitle($title)
                                     ->withContacts($contacts);
    }

    public function checkout()
    {   
        $title = "Checkout";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.checkout')->withTitle($title)
                                         ->withContacts($contacts);
    }

    public function details()
    {   
        $title = "Details";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.details')->withTitle($title)
                                        ->withContacts($contacts);
    }
}

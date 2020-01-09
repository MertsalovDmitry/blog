<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ShopController extends Controller
{
    public function index()
    {   
        $title = "Shop";
        $breadcrumb = "Shop";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.index')->withTitle($title)
                                      ->withContacts($contacts)
                                      ->withBreadcrumb($breadcrumb);
    }

    public function cart()
    {   
        $title = "Cart";
        $breadcrumb = "Cart";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.cart')->withTitle($title)
                                     ->withContacts($contacts)
                                     ->withBreadcrumb($breadcrumb);
    }

    public function checkout()
    {   
        $title = "Checkout";
        $breadcrumb = "Checkout";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.checkout')->withTitle($title)
                                         ->withContacts($contacts)
                                         ->withBreadcrumb($breadcrumb);
    }

    public function details()
    {   
        $title = "Details";
        $breadcrumb = "Details";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.shop.details')->withTitle($title)
                                        ->withContacts($contacts)
                                        ->withBreadcrumb($breadcrumb);
    }
}

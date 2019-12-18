<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contact Us";
        return view('blog.contact.contact')->withTitle($title);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contacts";
        return view('blog.contact.contact')->withTitle($title);
    }
}

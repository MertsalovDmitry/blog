<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class BlogController extends Controller
{
    public function index()
    {
        $title = "Blog";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.blog.index')->withTitle($title)
                                      ->withContacts($contacts);
    }

    public function post()
    {
        $title = "Single Blog Post";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.blog.details')->withTitle($title)
                                        ->withContacts($contacts);
    }
}

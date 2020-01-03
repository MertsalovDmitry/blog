<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Tag;

class BlogController extends Controller
{
    public function index()
    {
        $title = "Blog";
        $contacts = Contact::whereActive(true)->get();
        $tags = Tag::all();
        return view('blog.blog.index')->withTitle($title)
                                      ->withContacts($contacts)
                                      ->withTags($tags);
    }

    public function post()
    {
        $title = "Single Blog Post";
        $contacts = Contact::whereActive(true)->get();
        $tags = Tag::all();
        return view('blog.blog.details')->withTitle($title)
                                        ->withContacts($contacts)
                                        ->withTags($tags);
    }
}

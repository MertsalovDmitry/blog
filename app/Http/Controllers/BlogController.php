<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Tag;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $title = "Blog";
        $contacts = Contact::whereActive(true)->get();
        $tags = Tag::all();
        // $posts = Post::with('tags')->get();
        // $posts = Post::all();
        $posts = Post::with('author')->get();
        return view('blog.blog.index')->withTitle($title)
                                      ->withContacts($contacts)
                                      ->withTags($tags)
                                      ->withPosts($posts);
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

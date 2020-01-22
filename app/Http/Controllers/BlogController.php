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
        $breadcrumb = "Blog";
        $contacts = Contact::whereActive(true)->get();
        $tags = Tag::all();
        // $posts = Post::with('tags')->get();
        // $posts = Post::all();
        $posts = Post::whereActive(true)->with('author')->paginate(6);
        $recent = Post::whereActive(true)->with('author')->latest('created_at')->limit(4)->get();
        return view('blog.blog.index')->withTitle($title)
                                      ->withContacts($contacts)
                                      ->withTags($tags)
                                      ->withPosts($posts)
                                      ->withRecent($recent)
                                      ->withBreadcrumb($breadcrumb);
    }

    public function post($slug)
    {
        $title = "Single Blog Post";
        $contacts = Contact::whereActive(true)->get();
        $tags = Tag::all();
        $post = Post::whereActive(true)->where('slug', $slug)->with('tags')->first();
        $recent = Post::whereActive(true)->with('author')->latest('created_at')->limit(4)->get();
        if($post)
            {
                //$title = $post->title;
                $breadcrumb = $post->title;
                return view('blog.blog.details')->withTitle($title)
                                        ->withContacts($contacts)
                                        ->withTags($tags)
                                        ->withPost($post)
                                        ->withRecent($recent)
                                        // ->withPostTags($postTags)
                                        ->withBreadcrumb($breadcrumb);
            }
    }
}

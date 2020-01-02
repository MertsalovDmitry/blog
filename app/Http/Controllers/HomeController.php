<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $title = "mertsalov";
        $heroes  = Hero::whereActive(true)->get();
        $testimonials = Testimonial::whereActive(true)->get();
        return view('blog.index')->withTitle($title)
                                 ->withHeroes($heroes)
                                 ->withTestimonials($testimonials);
    }
}

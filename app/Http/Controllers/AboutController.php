<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About";
        $testimonials = Testimonial::whereActive(true)->get();
        return view('blog.about.about')->withTitle($title)
                                       ->withTestimonials($testimonials);
    }
}

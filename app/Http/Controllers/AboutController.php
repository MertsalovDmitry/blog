<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Member;
use App\Fact;
use App\Contact;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About";
        $testimonials = Testimonial::whereActive(true)->get();
        $members = Member::whereActive(true)->get();
        $facts = Fact::whereActive(true)->get();
        $contacts = Contact::whereActive(true)->get();
        return view('blog.about.about')->withTitle($title)
                                       ->withTestimonials($testimonials)
                                       ->withMembers($members)
                                       ->withFacts($facts)
                                       ->withContacts($contacts);
    }
}

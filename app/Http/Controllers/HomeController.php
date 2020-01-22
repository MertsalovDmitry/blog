<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Testimonial;
use App\Contact;
use App\ProjectCategory;
use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $title = "mertsalov";
        $heroes  = Hero::whereActive(true)->get();
        $testimonials = Testimonial::whereActive(true)->get();
        $contacts = Contact::whereActive(true)->get();
        $categories = ProjectCategory::all();
        $projects = Project::whereActive(true)->get();
        return view('blog.index')->withTitle($title)
                                 ->withHeroes($heroes)
                                 ->withTestimonials($testimonials)
                                 ->withContacts($contacts)
                                 ->withProjectCategories($categories)
                                 ->withProjects($projects);
    }
}

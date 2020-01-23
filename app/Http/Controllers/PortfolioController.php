<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\ProjectCategory;
use App\Project;

class PortfolioController extends Controller
{
    public function index()
    {   
        $title = "Portfolio";
        $breadcrumb = "Portfolio";
        $contacts = Contact::whereActive(true)->get();
        $categories = ProjectCategory::all();
        $projects = Project::whereActive(true)->get();
        return view('blog.portfolio.index')->withTitle($title)
                                           ->withContacts($contacts)
                                           ->withBreadcrumb($breadcrumb)
                                           ->withProjectCategories($categories)
                                           ->withProjects($projects);
    }

    public function project($slug)
    {   
        $title = "Details";
        $breadcrumb = "Details";
        $contacts = Contact::whereActive(true)->get();
        $project = Project::whereActive(true)->where('slug', $slug)->with('categories')->with('slides')->first();
        return view('blog.portfolio.details')->withTitle($title)
                                             ->withContacts($contacts)
                                             ->withBreadcrumb($breadcrumb)
                                             ->withProject($project);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PortfolioController extends Controller
{
    public function index()
    {   
        $title = "Portfolio";
        $breadcrumb = "Portfolio";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.portfolio.index')->withTitle($title)
                                           ->withContacts($contacts)
                                           ->withBreadcrumb($breadcrumb);
    }

    public function details()
    {   
        $title = "Details";
        $breadcrumb = "Details";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.portfolio.details')->withTitle($title)
                                             ->withContacts($contacts)
                                             ->withBreadcrumb($breadcrumb);
    }
}

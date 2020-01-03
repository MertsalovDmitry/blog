<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PortfolioController extends Controller
{
    public function index()
    {   
        $title = "Portfolio";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.portfolio.index')->withTitle($title)
                                           ->withContacts($contacts);
    }

    public function details()
    {   
        $title = "Details";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.portfolio.details')->withTitle($title)
                                             ->withContacts($contacts);
    }
}

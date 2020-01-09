<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contacts";
        $breadcrumb = "Contacts";
        $contacts = Contact::whereActive(true)->get();
        return view('blog.contact.contact')->withTitle($title)
                                           ->withContacts($contacts)
                                           ->withBreadcrumb($breadcrumb);
    }
}

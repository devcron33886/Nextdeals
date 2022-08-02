<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Contact us');
        SEOTools::setDescription('We are saving and creating jobs and a platform for trusted sellers to create jobs');
        SEOTools::opengraph()->setUrl('http://nextdeals.test/contact-us');
        SEOTools::setCanonical('http://nextdeals.test/contact-us');
        SEOTools::twitter()->setSite('@nextdeals');

        return view('contact');
    }

    public function store(Request $request)
    {
    }
}

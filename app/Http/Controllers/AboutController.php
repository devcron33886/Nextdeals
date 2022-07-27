<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        SEOTools::setTitle('About us');
        SEOTools::setDescription('We are saving and creating jobs and a platform for trusted sellers to create jobs');
        SEOTools::opengraph()->setUrl('https://nextdeals.test/about-us');
        SEOTools::setCanonical('http://nextdeals.test/about-us');
        SEOTools::twitter()->setSite('@nextdeals');
        return view('about');
    }
}

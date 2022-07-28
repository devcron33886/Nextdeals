<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;

class HomeController extends Controller
{
    public function __invoke()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('Welcome to Next Deals. Here you can buy or sell any property you want without any commission.!');
        SEOMeta::setCanonical('https://nextdeals.rw');
        TwitterCard::setTitle('Home');
        TwitterCard::setSite('@code_sco');
        $categories=Category::all();
        $tags=Tag::all();
        $latests=Product::latest()->get();
        return view('welcome',compact('latests','categories','tags'));
    }
}

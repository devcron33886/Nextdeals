<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Product $product)
    {
        SEOTools::setTitle($product->name);
        SEOTools::setDescription($product->description);
        SEOTools::opengraph()->setUrl('https://nextdeals.test/'.$product->slug);
        SEOTools::setCanonical('http://nextdeals.test/products/'.$product->slug);
        SEOTools::twitter()->setSite('@nextdeals');
       return view('products.show');
    }
}

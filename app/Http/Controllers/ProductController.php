<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Artesaos\SEOTools\Facades\SEOTools;

class ProductController extends Controller
{
    public function __invoke(Product $product)
    {
        SEOTools::setTitle($product->name);
        SEOTools::setDescription($product->description);
        SEOTools::opengraph()->setUrl('https://nextdeals.test/'.$product->slug);
        SEOTools::setCanonical('http://nextdeals.test/products/'.$product->slug);
        SEOTools::twitter()->setSite('@nextdeals');
        $mightLikes = Product::mightAlsoLike()->get();

        return view('products.show', compact('product', 'mightLikes'));
    }
}

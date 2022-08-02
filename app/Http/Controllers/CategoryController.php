<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Artesaos\SEOTools\Facades\SEOTools;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        SEOTools::setTitle($category->name);
        SEOTools::setDescription('We are saving and creating jobs and a platform for trusted sellers to create jobs');
        SEOTools::opengraph()->setUrl('https://nextdeals.test/categories/'.$category->slug);
        SEOTools::setCanonical('http://nextdeals.test/'.$category->slug);
        SEOTools::twitter()->setSite('@nextdeals');

        return view('categories.show');
    }
}

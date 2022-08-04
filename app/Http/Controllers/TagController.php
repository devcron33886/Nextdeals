<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Location;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $categories=Category::all();
        $locations=Location::all();
        $query = $tag->products()->with('media', 'categories','locations');
        $products = $query->paginate(12);

        return view('tags.show',compact('categories','products','locations','tag'));
    }
}

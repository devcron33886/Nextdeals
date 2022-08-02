<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('vendors.dashboard');
    }
}

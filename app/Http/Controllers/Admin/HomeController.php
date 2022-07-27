<?php

namespace App\Http\Controllers\Admin;

class HomeController
{
    public function __invoke()
    {
        return view('admin.dashbaord');
    }
}

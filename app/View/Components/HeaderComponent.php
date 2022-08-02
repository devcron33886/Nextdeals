<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponent extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Factory|Htmlable|string|Closure|Application
    {
        $categories = Category::all();

        return view('components.header-component', compact('categories'));
    }
}

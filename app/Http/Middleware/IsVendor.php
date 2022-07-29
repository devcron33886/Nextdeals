<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsVendor
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (!auth()->user()->is_vendor) {
            return redirect()->route('welcome');
        }

        return $next($request);
    }
}

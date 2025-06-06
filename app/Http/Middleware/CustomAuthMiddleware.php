<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user() && !request()->routeIs('login')) 
        {

            return redirect()->route('login');
        }

        return $next($request);
    }
}

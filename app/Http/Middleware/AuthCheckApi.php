<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthCheckApi
{
    public function handle($request, Closure $next)
    {
        if (! Auth::guard('api')->check()) {
            return response(['error' => 'Unauthenticated'], 401);
        }

        return $next($request);
    }
}


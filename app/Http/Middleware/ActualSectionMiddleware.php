<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ActualSectionMiddleware
{
    public function handle($request, Closure $next, $actualSection)
    {
        session(['actualSection' => $actualSection]);
        return $next($request);
    }
}

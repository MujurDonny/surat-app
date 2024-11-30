<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (auth()->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}

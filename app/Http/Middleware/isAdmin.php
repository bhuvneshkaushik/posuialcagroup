<?php

namespace App\Http\Middleware;

// use App\Http\Middleware\Auth;

use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check() && $request->user()->level == 1){
            return $next($request);
        }
        return redirect()->guest('/');
    }
}

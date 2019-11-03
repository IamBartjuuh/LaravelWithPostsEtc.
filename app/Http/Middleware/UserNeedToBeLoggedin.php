<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserNeedToBeLoggedin
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
        if (Auth::check())
        return $next($request);

    return redirect('/login')->with('error', 'U moet ingelogd zijn hiervoor! Geen account? Registreer rechtsboven');
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminHasRightPerms
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
        if (Auth::user()->rol != 0)
        return $next($request);

    return redirect('/home')->with('error', 'U heb hier geen toestemming voor!');
    }
}

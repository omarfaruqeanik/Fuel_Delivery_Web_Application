<?php

namespace App\Http\Middleware;

use Closure;
use Auth; //at the top

class owner
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
       if (Auth::check() && Auth::user()->role == 'owner') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return redirect('/admin');
        }
        elseif (Auth::check() && Auth::user()->role == 'faculty') {
            return redirect('/faculty');
        }
        elseif (Auth::check() && Auth::user()->role == 'superadmin') {
            return redirect('/superadmin');
        }
    }
}

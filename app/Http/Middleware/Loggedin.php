<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Loggedin
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
        if(Auth::check()){

            if(auth()->user()->role == 'company')
            {
                return redirect('/homeofcompany');
            }
            else
            {
                return redirect('/home');
            }
                                
        }
        return $next($request);
    }
}

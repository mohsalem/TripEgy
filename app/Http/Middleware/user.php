<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class user
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
        // dd(auth()->user());
        // if(null){
            if(Auth::check()){
            if(auth()->user()->role != 'company' )
            {
                return redirect('/login');
            }
            return $next($request);
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdminMiddleware
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
        // check for superadmin 
        // dd(Auth::guard('web')->check());
        if((Auth::guard('web')->check() && Auth::user()->role == '2') || (Auth::guard('web')->check() && Auth::user()->role == '1')){

               return $next($request);

        }
           
         abort(401);
        
    }
}

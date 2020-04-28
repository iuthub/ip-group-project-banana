<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role_id == 1)
            {
                return $next($request);
            }
            else
            {
                abort(401, "The user is not admin");
                
            }
        }
        else
        {
            abort(401, "The user is not admin");
        }

        
    }
}

<?php

namespace Blog\Http\Middleware;

use Closure;
use Illuminate\Support\Facade\Auth;

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
        if(!Auth::guest() && Auth::user()->admin){
            return $next($request);
        }

        //return redirect('uri');
        abort(401);
    }
}

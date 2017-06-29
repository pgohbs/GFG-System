<?php

namespace App\Http\Middleware;

use Closure;

class CheckFirstName
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
        if($request->input('firstname')==''){

            return redirect('/');
        }

        return $next($request);
        
    }
}

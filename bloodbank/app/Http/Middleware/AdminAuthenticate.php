<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminAuthenticate
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
        if(Session::has('username'))
        {
            return $next($request);
        }
        else
        {
            $message = 'Invalid Credentials';
            return view('error')->with('message', $message);
        }
    }
}

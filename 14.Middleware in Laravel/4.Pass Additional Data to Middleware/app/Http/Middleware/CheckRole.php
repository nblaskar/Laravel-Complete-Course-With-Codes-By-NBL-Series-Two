<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // You can also Apply loggic by accessing the value of this additional Parameter
        if($role === 'guest')
        {
            return redirect('/');
        }
        return $next($request);
    }
}

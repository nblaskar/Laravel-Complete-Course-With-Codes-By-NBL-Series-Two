<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UnderConstruction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 1)Throw an Excepting by Middleware
        // throw new HttpException(503);

        // 2)To check all the information inside Request
        // dd($request);


        // 3)To check all the information inside Closure
        // dd($next);

        // 4)You can Put any condition in middleware to access the page
        if($request->user=='admin'){
            return $next($request); 
        }


    }
}

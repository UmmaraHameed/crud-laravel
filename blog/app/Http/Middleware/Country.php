<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Country
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if($request->country!="Pakistan"){
        //     die('You cannot visit this site');
        // }
        echo "That used to check the country";
        return $next($request);
    }
    }


<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request)
       ->header("Access-Control-Allow-Origin", "http://urlfronted.example")
       ->header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE")
       ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization"); 
    }
}

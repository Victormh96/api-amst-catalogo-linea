<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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
        $response = $next($request);

        // Url peticiones
        $response->header->set("Access-Control-Allow-Origin", "*");
        // Métodos acceso
        $response->header->set("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE");
        // Headers petición
        $response->header->set("Access-Control-Allow-Headers", "Content-Type, Accept, Authorization, X-Requested-With, Application");
    }
}

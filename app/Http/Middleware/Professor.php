<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Professor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->tipo == 2) {
            return $next($request);
        }
        if (Auth::check() && Auth::user()->tipo != 2) {
            //se o usuario estiver logado e o tipo dele nao for professor ele vai ser redirecionado para notfound
            return redirect('/notfound');
        }
        return redirect('/login');
    }
}

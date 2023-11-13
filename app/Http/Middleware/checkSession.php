<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Closure;
use Illuminate\Http\Request;

class CheckSession
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
        //dd(session('user'));
        if (session()->has('user')) {
            return $next($request);
        } else {
            return redirect('/login')->with('sessionCad', 'La sesión ha caducado, favor de iniciar sesión de nuevo');
        }
    }
}

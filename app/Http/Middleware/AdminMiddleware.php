<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // if (auth()) {
    // return $next($request);
    // }

    public function handle(Request $request, Closure $next): Response
    {
        // Perform action
        if (!empty(Auth::check())){
            // dd("auth");
            if(Auth::user()->role == "admin"){

                return $next($request);
            }
            Auth::logout();
            // return redirect()->route('cus.signin');
            return $next($request);
        }

        // return redirect()->route('cus.signin');

        // dd("auth");
        return $next($request);
    }

    // abort(403, 'Unauthorized');
}

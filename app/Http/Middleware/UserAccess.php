<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType): Response
    {
        if (Auth::check()) {

            if (auth()->user()->type == $userType) {
                return $next($request);
            } else {
                $request->session()->flush();
                return redirect()->route('login');
            }

        } else {
            $request->session()->flush();
            return redirect()->route('login');
        }
    }
}

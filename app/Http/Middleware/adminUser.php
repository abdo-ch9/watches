<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class adminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Check if the user is logged in but doesn't have an Admin role
        if (Auth::user()->role !== "admin") {
            return redirect()->route('register')->withErrors(['message' => 'Access denied. You do not have admin privileges.']);
        }
        return $next($request);
    }
}

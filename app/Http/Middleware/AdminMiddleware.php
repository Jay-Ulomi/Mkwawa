<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

public function handle($request, Closure $next)
{
 
    if (!Auth::check()) {
        Log::info('User not authenticated');
        return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
    }

    if (!Auth::user()->is_admin) {
        Log::info('User is not an admin: ' . Auth::user()->email);
        return redirect()->route('login')->with('error', 'You do not have admin access.');
    }

    Log::info('Admin access granted for: ' . Auth::user()->email);
    return $next($request);
}
}

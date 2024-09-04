<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class LogVisitor
{
    public function handle($request, Closure $next)
    {
        // Log the visitor's data
        DB::table('visitor_logs')->insert([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'url' => $request->fullUrl(),
            'created_at' => now(),
        ]);

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SchedulerRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if ($request->user() && (
                $request->user()->role->name === 'admin'
                || $request->user()->role->name === 'scheduler'
            )) {
            return $next($request);
        }

        // Redirect or abort if the user doesn't have the required role
        return abort(403, 'Unauthorized action.');
    }
}

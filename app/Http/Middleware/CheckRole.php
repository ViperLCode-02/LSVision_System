<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if user is logged in
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();
        
        // Owner and Co-admin have access to EVERYTHING
        if (in_array($user->role, ['owner', 'co_admin'])) {
            return $next($request);
        }

        // Check if user's role is allowed for this route
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Redirect with error message
        return redirect()->route('dashboard')
            ->with('error', 'You do not have permission to access this page.');
    }
}
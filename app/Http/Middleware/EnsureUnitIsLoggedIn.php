<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUnitIsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('unit_logged_in')) {
            return redirect()->route('unit.login', ['model' => session('unit_model', 'aufogem')])
                ->with('status', ['Please log in to access this page.']);
        }

        return $next($request);
    }
}

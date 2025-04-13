<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('api')->check()) {
            return response()->json([
                'message' => 'Unauthorized'  // Altere para "Unauthorized"
            ], 401); // Retorna erro 401 para a API
        }
    
        return $next($request);
    }
    
    
    
        /**
        * Get the path the user should be redirected to if they are not authenticated.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return string|null
        */
        protected function redirectTo($request)
        {
            if (! $request->expectsJson()) {
                return route('login');
            }
        }
}

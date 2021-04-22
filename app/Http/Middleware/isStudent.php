<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ((int)$user->user_type === 3) {
            return $next($request);
        }
        Auth::logout();
        return redirect('/login')->withErrors(['error' => "Your account has end of session. Please login again!"]);
    }
}

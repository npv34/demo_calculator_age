<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // code logic
        $age = Carbon::parse($request->birthday)->age;
        if ($age < 18) {
            return redirect()->route('auth.register');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class EnsureXdminEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, Closure $next)
    {
        if (!$request->user('xdmin') || ($request->user('xdmin') instanceof MustVerifyEmail && !$request->user('xdmin')->hasVerifiedEmail())) {
            return Redirect::route('xdmin.verification.notice');
        }

        return $next($request);
    }
}

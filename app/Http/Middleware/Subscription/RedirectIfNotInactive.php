<?php

namespace Template\Http\Middleware\Subscription;

use Closure;

class RedirectIfNotInactive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->check() || auth()->user()->hasSubscription()) {
            return redirect()->route('account.index');
        }

        return $next($request);
    }
}

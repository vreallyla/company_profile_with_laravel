<?php

namespace App\Http\Middleware;

use Closure;
use mysql_xdevapi\Session;

class redirectMiddleware
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

        if (!is_null($request->token) &&
            !is_null($request->name) &&
            !is_null($request->ava)) {
            \session()->put('userData', [
                'token' => 'bearer ' . $request->token,
                'name' => $request->name,
                'ava' => $request->ava,
            ]);
        }
        return $next($request);
    }
}

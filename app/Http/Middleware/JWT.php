<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;

class JWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $request->headers->add(['Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU1MjMyNjU2OSwiZXhwIjoxNTUyMzMwMTY5LCJuYmYiOjE1NTIzMjY1NjksImp0aSI6IkwxSTNWdlU3QWE0aGt4dWoiLCJzdWIiOiI5ZDcwMzQ5OS05ODdiLTQ4MzEtODc3MS0wNGFjNzQxMTY4YjUiLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.ZGboPCheQ9kXy1Mxwx0wb23SKDn3iJsuK-W_FaprkB8']);
        JWTAuth::parseToken()->authenticate();
        return $next($request);
    }
}

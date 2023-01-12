<?php

namespace App\Http\Middleware;

use Closure;

class Administracija
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
        if (auth()->check()) {
            if (auth()->user()->Role != 'Administratorius') {
                abort(403);
            }
        } else {
            abort(401);
        }
        return $next($request);
    }
}
?>

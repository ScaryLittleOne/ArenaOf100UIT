<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if ($request->user()->admin==false) {
            //return redirect('home');
            abort(403, 'Unauthorized Access. Your IP has been reported to Admin');
        }

        return $next($request);
    }
}

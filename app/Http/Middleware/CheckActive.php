<?php

namespace App\Http\Middleware;

use Closure;

class CheckActive
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
        if ($request->user()->activen==false) {
            //return redirect('home');
            abort(403, 'Go Home Bitch. U Lost');
        }
        return $next($request);
    }
}

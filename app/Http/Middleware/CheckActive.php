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
        if ($request->user()->active==false) {
            //return redirect('home');
            abort(403, 'Go Home Bitch. U Loser');//Say Some Thing Or Direct To Somewhere When The User Sucks And Loses
        }
        return $next($request);
    }
}

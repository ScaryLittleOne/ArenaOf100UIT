<?php

namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;
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
           //return redirect()->route('gameover');
            //return File::get(public_path() . '/gameover.html');
            abort(500, 'Something went wrong');
        }
        return $next($request);
    }
}

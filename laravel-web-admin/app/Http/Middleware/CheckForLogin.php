<?php

namespace App\Http\Middleware;

use Closure;



class CheckForLogin extends Authenticate
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
        $check = \Auth::guard('api')->check();
        dd($check);
        if (!$check) {
            return redirect('/');
        }
        return $next($request);
    }






}

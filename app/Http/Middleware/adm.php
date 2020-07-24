<?php

namespace App\Http\Middleware;

use Closure;

class adm
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

        if(\Auth::user()->level == 'moderador'){
            return redirect()->route('home');
        } elseif (\Auth::user()->level == 'usuario') {
            return redirect()->route('web.inicio');
        }

        return $next($request);
    }
}

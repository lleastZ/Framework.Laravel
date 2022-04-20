<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SizeInValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->query('size')<248)
            return redirect('/');
        # Отправить нашего пользователя дальше к роуту
        return $next($request);
    }
}

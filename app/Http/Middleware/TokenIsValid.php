<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * Проверка пользователя на имеющийся в адресной строке ключа token
     * Пример: http://localhost/?token=ключ
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        # Проверка на совпадение ключа из token
        # Получаем из заппоса ключ token и сравниваем его значение
        if($request->query('token') == 'gaz-asd-edc')
            return $next($request);

        # Если token не соответсвует, выведем текст "Нет доступа" и вернем ошибку 401
        # 401 является ошибкой не авторизован
        return  response('Нет доступа', 401);
    }
}

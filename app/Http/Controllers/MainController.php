<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function test()
    {
        return 'Hello World';
    }

    public function index(Request $request)
    {
        return $request->ips();
    }

    # Метод для динамической ссылки
    # Будет присылать ID пользователя
    public function user(Request $request, $id)
    {
        return 'User id:' . $id . '; Host:' . $request->userAgent();
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('sizeVerification')->group(function(){
    Route::get('test',function (){
        return 'It s okey';
    });
});

# Создаем правило проверки на прослойку
# Внутри group будут маршруты
Route::middleware('validationToken')->group(function (){
    Route::get('project', function (){return 'Project One';});
});

#Прописали маршрут до MainController метода test
# Ссылка: http://domain/main
Route::get('main', [MainController::class, 'test']);
Route::get('ip', [MainController::class, 'index']);
Route::get('user/{id}', [MainController::class, 'user'])->whereNumber('id');


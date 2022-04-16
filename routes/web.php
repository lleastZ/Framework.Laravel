<?php

use Illuminate\Support\Facades\Route;

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
Route::get('my-name', function () {
    return ('Кобзев Никита Григорьевич');
});
Route::get('my-friend', function () {
    return ('Кайзерова Анна Евгеньевна');
});
Route::get('get-friend/{name}', function ($name) {
    $name='Kaizer';
    return $name;
});
Route::get('my-city/{city}', function ($city) {
    return $city;
});
Route::get('level/{lvl}', function ($lvl) {

    if($lvl>=0 && $lvl<=25){
        echo 'Новичок!';
    }
    if($lvl>=26 && $lvl<=50){
        echo 'Специалист!';
    }
    if($lvl>=51 && $lvl<=75){
        echo 'Босс!';
    }
    if($lvl>=76 && $lvl<=98){
        echo 'Старик!';
    }
    if($lvl==99){
        echo 'Король!';
    }
});

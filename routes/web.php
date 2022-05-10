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

Класс Route отвечает за поиск маршрута и перенаправляет его на стартовую страницу
которую мы видим при заходе в приложение (resources/views/welcome)

Закомментируем класс Route перед созданием своей стартовой страницы
*/
/*Route::get('/', function () {
    return view('welcome');
});*/

/*Создадим свою стартовую страницу вместо стандартной:*/
/*Route::get('/', function () {
    return '<h2><b>Hello? World!</b></h2>';
});*/

/*Создадим еще одну стартовую страницу но уже маршрут будет вести на файл с html разметкой*/
Route::get('/', function () {
    /*И здесь возвращаем специальную функцию хелпер - view, данная функция поможет
    вернуть вид (home) с какими то данными*/
    return view('home'); /* создаём вид 'home' в дирректории 'resources/views/home.blade.php'*/
});






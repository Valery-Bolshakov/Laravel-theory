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
*/
/** Закомментируем (первоначальный маршрут) класс Route перед созданием своей стартовой страницы */
/** метод 'get' принимает в себя 2 параметра. Первый - часть адреса которая соответствует выполняемому
 * коду во втором параметре. В данном случае "/" соответствует главной странице
 * Второй параметр - коллбек функция/контроллер/строка которая будет выполнена для данного адреса.
 */
/*Route::get('/', function () {
    return view('welcome');  // resources/view/welcome...
});*/

/*Создадим свою стартовую страницу вместо стандартной:*/
/*Route::get('/', function () {
    return '<h2><b>Hello? World!</b></h2>';
});*/

/*Создадим еще одну стартовую страницу но уже маршрут будет вести на файл "home.blade.php" с html разметкой*/
Route::get('/', function () {
//    В данной коллбек функции можно писать какой нибдуь код, помимо ретерна вида
    $res = 4 + 7;
    $name = 'user';
//    Чтобы эти данные из функции передались в шаблон - есть несколько вариантов:
//    - Посредством метода compact('строчно передаем названия переменных')
//    - Либо посредством функции view (данные передаем вторым параметром в виде массива)
//    - Либо '->with('arg1', arg2)'. arg1 - название того что хотим передать, arg2 - передаваемое значение
//      и далее в виде 'home' можно обратиться к arg1 и вид выведет значение (arg2)

//    И здесь возвращаем специальную функцию хелпер - view, данная функция поможет
//    вернуть вид (home) с какими то данными из дирректории 'resources/views'
//    создаём вид 'home' в дирректории 'resources/views/home.blade.php'
//    return view('home', ['res' => $res, 'name' => $name]);
//    return view('home')->with('res', $res);
    return view('home', compact('res', 'name'));
});

/** что бы создать еще одну страницу помимо главной - надо прописать для нее путь и создать Вид: */
Route::get('about', function () {
    return '<h3>Допустим About page</h3>';  // http://laravel-theory/about - откроет новую страницу
});

/*для отправки формы надо либо писать 2 емтода отдельно, либо использовать метод match()*/
/*Route::get('contact', function () {
    return view('contact');
});
Route::post('/send-email', function () {
    if(!empty($_POST)){
        dump($_POST);  // функция dump() красиво распечатывает данные массивов в laravel
    }
    return 'Send Email';
});*/


/** методы для отправки формы */
/* Используем метод match() для того что бы задействовать 2 метода post and get
Его удобно использовать для страниц с формой */
Route::match(['post', 'get'], '/contact', function () {
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
});


/** использование именованых маршрутов*/
/*Route::match(['post', 'get'], '/contact', function () {
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');*/  // задаем имя для маршрута и затем в шаблоне указываем route('contact')


/** вывод страницы используя метод view() */
Route::view('/test', 'test', ['test' => 'Test data']);


/** Редирект страницы с одного адреса на другой redirect('/about',--> '/contact') */
//Route::redirect('/about', '/contact');
//Route::redirect('/about', '/contact', 301);  // редирект с передачей кода статуса 301
//Route::permanentRedirect('about', 'contact');



/*
Route::get($uri, $callback);  // основные методы | простые запросы страниц
Route::post($uri, $callback);  // основные методы | запросы для ФОРМ
Route::delete($uri, $callback);  // основные методы
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::options($uri, $callback);

Route::match(['get', 'post'], '/', function () {
    // маршрут, который отвечает на несколько HTTP-команд
});

Route::any('/', function () {
    // маршрут, который отвечает на все HTTP-команды,
});
*/



/** Шаборнизатор Blade: */

/*указываем маршрут до контроллеров Home and Page и даем имена шаблонам '->name('home')' для дальнейшего задания
корректных ссылок с помощью функции Route */
Route::get('/', 'HomeController@index')->name('home');
Route::get('/page/about', 'PageController@show')->name('page.about');


















<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function show()
    {
        return view("pages.about"); // задаем адрес шаблона в дир-ии resources/views
    }

}

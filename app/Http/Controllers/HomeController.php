<?php


namespace App\Http\Controllers;


/*use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;*/
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {



        return view('home', []);
    }

    public function test()
    {
        return __METHOD__;
    }

}

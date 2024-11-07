<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //crear el metodo invoke
    public function __invoke()
    {
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {

        // шаблон находится по пути resources/views/layouts/about.blade.php
        return view('about'); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return inertia('Home/Index', [
            //'ifAuth' => auth()->user() ? true : false
            'ifAuth' => auth()->user() ? false : true
        ]);
    }
}

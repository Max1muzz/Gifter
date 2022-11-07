<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopTenController extends Controller
{
    public function index(){
        return inertia('TopTen/Index');
    }
}

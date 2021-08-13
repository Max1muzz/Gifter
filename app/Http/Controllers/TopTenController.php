<?php

namespace App\Http\Controllers;
use App\Models\Interview;

use Illuminate\Http\Request;

class TopTenController extends Controller
{
    public function show()
    {
        // $interviews = Interview::where('result',123)->latest()->first();
        $interviews = Interview::all();
        //dd($interviews);
        return view('top', compact('interviews'));
    }
}

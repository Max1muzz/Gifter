<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke()
    {
        $arr = [
            'name' => auth()->user()->name,
            'year' => date('Y'),
        ];
        return view('Profile.edit', compact('arr'));
    }

}

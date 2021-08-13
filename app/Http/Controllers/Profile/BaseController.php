<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $interviews = Interview::where('id_user', $user->id)->get();
        //Если коллекция пуста, присваиваем null
        if (blank($interviews))
            $interviews = null;
        return view('Profile.base', compact('user', 'interviews'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $interviews = Interview::where('id_user', $user->id)->get();
        //Если коллекция пуста, присваиваем null
        if (blank($interviews))
            $interviews = null;
        return view('profile', compact('user', 'interviews'));
    }
}

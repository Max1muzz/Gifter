<?php

namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        //Проверка на заполненность данных у юзера
        if ($user->sex == null || $user->country == null || $user->age == null)
            return redirect()->route('profile.edit');
        //Проверка есть ли подборы у юзера
        $interview = Interview::where('id_user', $user->id)->latest()->first();
        if ($interview == null)
            return redirect()->route('select.create');
        //Есть ли незаконченные подборы у юзера
        elseif (strlen($interview->result) < 6)
            return view('Select.show', compact('interview'));
        else
            return redirect()->route('select.create');
    }


    /*public function select()
    {
        $interviews = Interview::where('id_user', 6)->get();
        $number = $interviews->count();
        if ($number == 0) {
            echo('empty');
        }
        //Выдаёт инфу о зарегистрированном юзере
        $user = auth()->user();

        //Если пустой выдаёт true
        //$link = blank($interviews);
        //Наоборот
        //$link = filled($interviews);

        $link = today();
        //foreach ($user as $lin){
        //    dump($lin);
        //}
        $year = date('Y');
        $old = $year - 20;

        dump($old);
        dump($user);
        //dump($user);
        //dump($number);
        dd($interviews);
        //return view('find', compact('interviews'));
    }*/
}

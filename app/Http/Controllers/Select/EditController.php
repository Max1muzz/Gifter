<?php

namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use App\Models\Page;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $interview = Interview::where('id_user',$user->id)->latest()->first();
        $name = $interview->name;
        //Проверка длинны строки результата интервью, и выдача страницы опроса
        if (strlen($interview->result)==1)
            $page = Page::where('id', 1)->first();
        elseif (strlen($interview->result)==2)
            $page = Page::where('id', 2)->first();
        elseif (strlen($interview->result)==3)
            $page = Page::where('id', 3)->first();
        elseif (strlen($interview->result)==4)
            $page = Page::where('id', 4)->first();
        elseif (strlen($interview->result)==5){
            //Проверка последнего символа результата интервью
            if (substr($interview->result, -1) == 1)
                $page = Page::where('id', 5)->first();
            elseif (substr($interview->result, -1) == 2)
                $page = Page::where('id', 6)->first();
            elseif (substr($interview->result, -1) == 3)
                $page = Page::where('id', 7)->first();
        }
        //Если опрос окончен, переводим на роут с выдачей товаров
        elseif (strlen($interview->result)==6)
            return redirect()->route('profile.base');
        return view('Select.edit', compact('page', 'name'));
    }
}

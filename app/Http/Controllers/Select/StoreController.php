<?php

namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
use App\Http\Requests\Select\StoreRequest;
use App\Models\Interview;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $user = auth()->user();
        $name = $request->validated();
        $data = [
            'name' => $name['name'],
            'result' => '1',
            'id_user' => $user->id,
        ];
        $interview = Interview::where('id_user', $user->id)->latest()->first();
        //Проверка чтобы не создавть пустые интервью, на случай если юзер нажмёт
        //в браузере кнопку назад, и снова введёт Имя
        if($interview !== null) {
            if (strlen($interview->result) < 6)
            $interview->update($data);
            else
                Interview::create($data);
        }
        else
            Interview::create($data);
        return redirect()->route('select.edit');
    }
}

<?php

namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use App\Models\Page;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke($page)
    {
        $user = auth()->user();
        $interview = Interview::where('id_user',$user->id)->latest()->first();
        $data = [
            'result'=>$interview->result.$page,
            ];
        $interview->update($data);
        return redirect()->route('select.edit');

    }
}

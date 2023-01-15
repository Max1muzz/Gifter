<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $selections = [];
        $i = 1;
        foreach (auth()->user()->selections()->orderBy('updated_at', 'desc')->limit(10)->get() as $item) {
            $selections[$i] = [
                'id' => $item->id,
                'name' => $item->name,
                'result' => $item->result,
                'user_id' => $item->user_id,
                'date' => $item->updated_at->format('d.m.Y')
            ];
            $i++;
        }
        return inertia('Profile/Index',[
            'selections' => $selections
        ]);
    }

    public function gifts(){
        $gifts = [];
        $i = 1;
        $btn = 2;
        foreach (auth()->user()->gifts()->orderBy('created_at', 'desc')->limit(10)->get() as $item) {
            $gifts[$i] = [
                'id' => $item->id,
                'price' => $item->price,
                'link' => $item->link,
                'title' => $item->title,
                'img' => $item->img,
                'btn' => 'btn'.$btn
            ];
            $i++;
            $btn = $btn==6 ? 1 : $btn+1;
        }
        return inertia('Profile/Gifts',[
            'gifts' => $gifts
        ]);
    }
}

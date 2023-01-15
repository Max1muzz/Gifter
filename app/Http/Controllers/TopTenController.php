<?php

namespace App\Http\Controllers;

use App\Models\Top;
use Illuminate\Http\Request;

class TopTenController extends Controller
{
    public function index(){
        $products = [];
        foreach (Top::all() as $item){
            $products[$item->id] = [
                'id' => $item->product->id,
                'title' => $item->product->title,
                'content' => $item->product->content,
                'price' => $item->product->price,
                'img' => $item->product->img,
                'btn' => $item->btn
            ];
        }
        return inertia('TopTen/Index', [
            'products' => $products
        ]);
    }
}

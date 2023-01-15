<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RandomController extends Controller
{
    public function index(){
        return inertia('Random/Index');
    }

    public function result($price){
        $product = $this->getProduct($price);
        return inertia('Random/Result', [
            'product' => $product ? $product->attributesToArray() : null,
            'price' => $price
        ]);
    }

    public function getProduct($price){
        $products = Cache::pull($price);
        if($products == null){
            $products = $this->getProducts($price);
        }
        $product = null;
        if($products->count() > 0){
            $product = $products->pop();
        }
        if($products->count() > 0){
            Cache::put($price, $products);
        }else{
            Cache::forget($price);
        }
        return $product;
    }

    public function getProducts($price){
        $products = null;
        if($price == '50'){
            $products = Product::where('price', '<', 51)->inRandomOrder()->limit(50)->get();
        }elseif ($price == '300'){
            $products = Product::where('price', '>', 50)->where('price', '<', 301)->inRandomOrder()->limit(50)->get();
        }elseif ($price == '1000'){
            $products = Product::where('price', '>', 300)->where('price', '<', 1001)->inRandomOrder()->limit(50)->get();
        }elseif ($price == 'unlimited'){
            $products = Product::where('price', '>', 1000)->inRandomOrder()->limit(50)->get();
        }
        return $products;
    }
}

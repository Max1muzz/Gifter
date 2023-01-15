<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Page;
use App\Models\Product;
use App\Models\Selection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SelectionController extends Controller
{
    public function index() {
        $selection = Cache::get('selection');
        if ($selection == null) {
            return inertia('Selection/Create');
        } elseif (strlen($selection['code']) < 5) {
            return inertia('Selection/Edit', [
                'page' => Page::find(strlen($selection['code']))->toArray(),
                'name' => $selection['name'],
            ]);
        } elseif (strlen($selection['code']) === 5) {
            if (substr($selection['code'], -1, 1) == '1') {
                $page = Page::find(5);
            } elseif (substr($selection['code'], -1, 1) == '2') {
                $page = Page::find(6);
            } elseif (substr($selection['code'], -1, 1) == '3') {
                $page = Page::find(7);
            }else return redirect()->route('selection.finish');
            return inertia('Selection/Edit', [
                'page' => $page->toArray(),
                'name' => $selection['name']
            ]);
        } elseif (strlen($selection['code']) === 6) {
            $product = $this->getProduct($selection['code']);
            if ($product && auth()->user() && !$selection['saved']){
                Selection::firstOrCreate([
                    'name' => $selection['name'],
                    'result' => $selection['code'],
                    'user_id' => auth()->user()->id
                ]);
                $selection['saved'] = true;
                Cache::put('selection', $selection);
            }
            return inertia('Selection/Show', [
                'name' => $selection['name'],
                'product' => $product ? $product->toArray() : null,
                'profile' => false
            ]);
        }
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|alpha_dash|max:30'
        ]);
        Cache::put('selection', [
            'name' => ucfirst($request->name),
            'code' => '1'
        ]);
        return redirect()->route('selection.index');
    }

    public function update(Request $request) {
        $request->validate([
            'param' => 'required|string|alpha_num|max:1'
        ]);
        $selection = Cache::get('selection');
        if (strlen($selection['code']) < 6) {
            $selection['code'] .= $request->param;
            Cache::put('selection', $selection);
        }
        return redirect()->route('selection.index');
    }

    public function delete(Selection $selection){
        if ($selection->user_id == auth()->user()->id) {
            dd($selection);
            $selection->delete();
        }
        return redirect()->route('profile.index');
    }

    public function profile(Selection $selection){
        if ($selection->user_id == auth()->user()->id) {
            $product = $this->getProduct($selection->code);
            return inertia('Selection/Show', [
                'name' => $selection->name,
                'product' => $product ? $product->toArray() : null,
                'profile' => true
            ]);
        }
        return redirect()->route('profile.index');
    }

    public function getProduct($code) {
        $products = Cache::pull('products');
        if ($products == null || $products->first()->code != $code) {
            if (substr($code, 1, 1) == 'n') {
                $code1 = str_replace('n', 'w', $code);
                $code2 = str_replace('n', 'm', $code);
                foreach (Code::where('code', $code1)->orwhere('code', $code2)->inRandomOrder()->get() as $codes){
                    foreach ($codes->products()->inRandomOrder()->get() as $item){
                        $products[$item->id] = $item;
                    }
                }
            } else {
                foreach (Code::where('code', $code)->get() as $item) {
                    $products = $item->products()->inRandomOrder()->get();
                }
            }
        }
        $product = null;
        if ($products !== null && $products->count() > 0) {
            $product = $products->pop();
        }
        if ($products !== null && $products->count() > 0) {
            Cache::put('products', $products);
        } else {
            Cache::forget('products');
        }
        return $product;
    }

    public function finish(){
        Cache::forget('selection');
        return redirect()->route('home.index');
    }

    public function restart(){
        Cache::forget('selection');
        return redirect()->route('selection.index');
    }

    public function gift(Product $product){
        if ($product && auth()->user()){
            //auth()->user()->gifts()->where('product_id', $product->id)->delete();
            //dd(auth()->user()->gifts()->count());
            auth()->user()->gifts()->detach($product->id);
            auth()->user()->gifts()->attach($product->id);
        }
        return inertia('Gift/Show', [
            'product' => $product->toArray(),
            'pathback' => url()->previous()
        ]);
    }
}

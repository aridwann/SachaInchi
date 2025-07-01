<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public static function get(){
        $products = Product::latest();

        if(request('search')){
            $products->where('name', 'like', '%' . request('search') . '%');
        }

        return view('products', ['products' => $products->get()]);
    }

    public static function getTop(){
        return view('landingpage', [
            'products' => Product::orderBy('sold', 'desc')->take(3)->get()
        ]);
    }
}

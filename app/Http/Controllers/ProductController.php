<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $query = Product::query();

        if ($request->has('search') && $request->search !== null) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(10); // pagination recommended

        return view('products', compact('products'));
    }

    public static function get(){
        return view('products', [
            'products' => Product::all()
        ]);
    }
    public static function getTop(){
        return view('landingpage', [
            'products' => Product::orderBy('sold', 'desc')->take(3)->get()
        ]);
    }
}

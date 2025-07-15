<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public static function index(Request $request){
        $products = Product::latest();

        if(request('search')){
            $products->where('name', 'like', "%$request->search%");
        }

        return view('products', ['products' => $products->get()]);
    }

    public static function getTop(){
        return view('landingpage', [
            'products' => Product::take(3)->get()
        ]);
    }

    public function edit(Product $product)
    {
        return view('edit-product', compact('product'));
    }

    /**
     * Mengupdate produk di database.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'stock' => 'required|in:Tersedia,Kosong', 
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240'
        ]);
        
        if ($request->hasFile('img')) {
            if ($product->img) {
                Storage::disk('public')->delete($product->img);
            }
            $validated['img'] = $request->file('img')->store('product-images', 'public');
        }
    
        $product->update($validated);
        
        return redirect("/dashboard")->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect("dashboard");
    }
}

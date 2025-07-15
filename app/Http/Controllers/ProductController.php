<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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

    public function edit(Product $product)
    {
        return view('edit-product', compact('product'));
    }

    /**
     * Mengupdate produk di database.
     */
    public function update(Request $request, Product $product)
    {
        // 1. Validasi input dari form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            // 'stock' => 'required|in:Tersedia,Kosong', // Asumsi ada input untuk stok
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048' // Opsional, maks 2MB
        ]);
        
        // 2. Handle upload gambar jika ada gambar baru
        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            if ($product->img) {
                Storage::disk('public')->delete($product->img);
            }
            // Simpan gambar baru dan dapatkan path-nya
            $validated['img'] = $request->file('img')->store('product-images', 'public');
        }
        
        // 3. Update data produk
        $product->update($validated);
        
        // 4. Redirect kembali ke halaman kelola produk dengan pesan sukses
        return redirect("/dashboard")->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect("dashboard");
    }
}

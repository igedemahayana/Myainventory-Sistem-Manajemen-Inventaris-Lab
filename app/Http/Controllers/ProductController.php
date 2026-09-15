<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // 1. Menampilkan daftar barang
    public function index () {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    // 2. Menampilkan form tambah barang
    public function create() {
        return view('products.create');
    }

    // 3. Menyimpan data barang baru ke database
    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'spesifikasi' => ['required', 'string', 'max:255'],
            'jumlah' => ['required', 'integer', 'min:0'],
        ]);

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Data Barang Berhasil Ditambahkan!');
    }

    // 4. Menampilkan form edit barang
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // 5. Memperbarui data barang di database
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'spesifikasi' => ['required', 'string', 'max:255'],
            'jumlah' => ['required', 'integer', 'min:0'],
        ]);

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Data barang berhasil diperbarui!');
    }

    // 6. Menghapus data barang
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Data barang berhasil dihapus!');
    }
}

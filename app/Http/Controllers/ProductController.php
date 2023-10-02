<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.productindex')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.productcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'gambar_produk' => 'required',
            'link_produk' => 'required',
        ]);
        $product = new Product();
        $product->nama_produk = $request->nama_produk;
        $product->link_produk = $request->link_produk;
        $product->gambar_produk = $request->file('gambar_produk')->store('imagesproduk', 'public');
        
        $product->save();

        // Alert::success('Data Produk Berhasil Ditambahkan');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'desc')->get();
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
            'nama_product' => 'required',
            'gambar_product' => 'required',
            'link_product' => 'required',
            'kategori_product' => 'required',
        ]);
        $product = new Product();
        $product->nama_product = $request->nama_product;
        $product->kategori_product = $request->kategori_product;
        $product->link_product = $request->link_product;
        $product->gambar_product = $request->file('gambar_product')->store('imagesproduct', 'public');
        
        $product->save();
        Alert::success('Data product berhasil ditambahkan');
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
        $product = Product::find($id);
        return view('admin.productedit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_product' => 'required',
            'link_product' => 'required',
            'kategori_product' => 'required',
        ]);

        $product = Product::where('id', $id)->first();
        $product->nama_product = $request->get('nama_product');
        $product->kategori_product = $request->get('kategori_product');
        $product->link_product = $request->get('link_product');

        if ($request->hasFile('gambar_product')) {
            if ($product->gambar_product && file_exists(storage_path('app/public/' . $product->gambar_product))) {
                Storage::delete('public/' . $product->gambar_product);
            }
            $image_name = $request->file('gambar_product')->store('imagesproduct', 'public');
            $product->gambar_product = $image_name;
        }
        $product->save();
        Alert::success('Data product berhasil diubah');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        Alert::success('Data product berhasil dihapus');
        return redirect()->route('product.index');
    }
}

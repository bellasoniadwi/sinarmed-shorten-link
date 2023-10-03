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
            'nama_produk' => 'required',
            'gambar_produk' => 'required',
            'link_produk' => 'required',
        ]);
        $product = new Product();
        $product->nama_produk = $request->nama_produk;
        $product->link_produk = $request->link_produk;
        $product->gambar_produk = $request->file('gambar_produk')->store('imagesproduk', 'public');
        
        $product->save();
        Alert::success('Data Produk berhasil ditambahkan');
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
            'nama_produk' => 'required',
            'link_produk' => 'required',
        ]);

        $product = Product::where('id', $id)->first();
        $product->nama_produk = $request->get('nama_produk');
        $product->link_produk = $request->get('link_produk');
        //$produk->satuan = $request->get('satuan');

        if ($request->hasFile('gambar_produk')) {
            if ($product->gambar_produk && file_exists(storage_path('app/public/' . $product->gambar_produk))) {
                Storage::delete('public/' . $product->gambar_produk);
            }
            $image_name = $request->file('gambar_produk')->store('imagesproduk', 'public');
            $product->gambar_produk = $image_name;
        }
        $product->save();
        Alert::success('Data Produk berhasil diubah');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            Product::find($id)->delete();
        }catch(Throwable $error){
            report($error);
            return to_route(route: 'product.index')->with('warning', 
            'Mohon Maaf Data Produk Belum Bisa Dihapus. Coba Lagi Nanti.');
        }
        return redirect()->route('product.index')
            -> with('success', 'Data Produk Berhasil Dihapus');
    }
}

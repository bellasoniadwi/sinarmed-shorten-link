<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $ekatalog = Product::where('kategori_product', 'E-katalog')->get();
        $dalamnegeri = Product::where('kategori_product', 'Dalam Negeri')->get();
        return view('user.index', compact('ekatalog', 'dalamnegeri'));
    }
}

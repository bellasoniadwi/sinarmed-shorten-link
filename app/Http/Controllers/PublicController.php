<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $akl = Product::where('kategori_product', 'AKL')->get();
        $tkdn = Product::where('kategori_product', 'TKDN')->orderBy('created_at', 'desc')->take(4)->get();
        return view('user.index', compact('akl', 'tkdn'));
    }

    public function galery()
    {
        $tkdn = Product::where('kategori_product', 'TKDN')->orderBy('created_at', 'desc')->get();
        return view('user.galery', compact('tkdn'));
    }
}

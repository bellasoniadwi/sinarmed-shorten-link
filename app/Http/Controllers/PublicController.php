<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('user.index')->with('product', $product);
    }
}

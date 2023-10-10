<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailActive;
use App\Models\ThumbnailGallery;
use App\Models\ThumbnailGroup;
use App\Models\ThumbnailNonactive;
use App\Models\ThumbnailSocialmedia;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $nonactive = ThumbnailNonactive::where('is_active', true)->get();
        $active = ThumbnailActive::where('is_active', true)->get();
        $socialmedia = ThumbnailSocialmedia::where('is_active', true)->get();
        $group = ThumbnailGroup::where('is_active', true)->get();
        $gallery = ThumbnailGallery::where('is_active', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('user.index', compact('nonactive', 'active', 'socialmedia', 'group', 'gallery'));
    }

    public function galery()
    {
        // $tkdn = Product::where('kategori_product', 'TKDN')->orderBy('created_at', 'desc')->get();
        // return view('user.galery', compact('tkdn'));
    }
}

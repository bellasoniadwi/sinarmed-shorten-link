<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailActive;
use App\Models\ThumbnailGallery;
use App\Models\ThumbnailGroup;
use App\Models\ThumbnailNonactive;
use App\Models\ThumbnailSocialmedia;
use App\Models\ThumbnailInbox;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    
    public function inbox(Request $request){
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'pesan' => 'required',
        ]);
        $inbox = new ThumbnailInbox();
        $inbox->nama = $request->nama;
        $inbox->telepon = $request->telepon;
        $inbox->pesan = $request->pesan;
        
        $inbox->save();
        Alert::success('Pesan anda telah diterima');
        return redirect()->route('user.index');
    }
}

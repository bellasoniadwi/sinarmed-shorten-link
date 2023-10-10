<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class ThumbnailGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = ThumbnailGallery::orderBy('created_at', 'desc')->get();
        return view('admin.gallery.index')->with('gallery', $gallery);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_thumbnail' => 'required',
            'link_thumbnail' => 'required',
            'gambar_thumbnail' => 'required',
        ]);
        $gallery = new ThumbnailGallery();
        $gallery->judul_thumbnail = $request->judul_thumbnail;
        $gallery->link_thumbnail = $request->link_thumbnail;
        $gallery->gambar_thumbnail = $request->file('gambar_thumbnail')->store('images_thumb-gallery', 'public');
        $gallery->is_active = true;
        
        $gallery->save();
        Alert::success('Data thumbnail gallery berhasil ditambahkan');
        return redirect()->route('thumbnail-gallery.index');
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
        $gallery = ThumbnailGallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_thumbnail' => 'required',
            'link_thumbnail' => 'required',
        ]);

        $gallery = ThumbnailGallery::where('id', $id)->first();
        $gallery->judul_thumbnail = $request->judul_thumbnail;
        $gallery->link_thumbnail = $request->link_thumbnail;
        if ($request->hasFile('gambar_thumbnail')) {
            if ($gallery->gambar_thumbnail && file_exists(storage_path('app/public/' . $gallery->gambar_thumbnail))) {
                Storage::delete('public/' . $gallery->gambar_thumbnail);
            }
            $image_name = $request->file('gambar_thumbnail')->store('images_thumb-gallery', 'public');
            $gallery->gambar_thumbnail = $image_name;
        }

        $gallery->save();
        Alert::success('Data thumbnail berhasil diubah');
        return redirect()->route('thumbnail-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = ThumbnailGallery::find($id);
        if ($gallery->gambar_thumbnail && file_exists(storage_path('app/public/' . $gallery->gambar_thumbnail))) {
            Storage::delete('public/' . $gallery->gambar_thumbnail);
        }
        $gallery->delete();
        Alert::success('Data thumbnail berhasil dihapus');
        return redirect()->route('thumbnail-gallery.index');
    }

    public function updateStatus($id)
    {
        $gallery = ThumbnailGallery::find($id);

        if (!$gallery) {
            return redirect()->route('thumbnail-gallery.index')->with('error', 'Data Thumbnail Gallery tidak ditemukan.');
        }

        $gallery->is_active = !$gallery->is_active;

        $gallery->save();

        return redirect()->route('thumbnail-gallery.index')->with('success', 'Status Thumbnail berhasil diubah.');
    }
}

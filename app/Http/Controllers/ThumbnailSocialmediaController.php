<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailSocialmedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class ThumbnailSocialmediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialmedia = ThumbnailSocialmedia::orderBy('created_at', 'desc')->get();
        return view('admin.socialmedia.index')->with('socialmedia', $socialmedia);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.socialmedia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'link_thumbnail' => 'required',
            'gambar_thumbnail' => 'required',
        ]);
        $socialmedia = new ThumbnailSocialmedia();
        $socialmedia->link_thumbnail = $request->link_thumbnail;
        $socialmedia->gambar_thumbnail = $request->file('gambar_thumbnail')->store('images_thumb-socialmedia', 'public');
        $socialmedia->is_active = true;
        
        $socialmedia->save();
        Alert::success('Data thumbnail social media berhasil ditambahkan');
        return redirect()->route('thumbnail-socialmedia.index');
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
        $socialmedia = ThumbnailSocialmedia::find($id);
        return view('admin.socialmedia.edit', compact('socialmedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'link_thumbnail' => 'required',
        ]);

        $socialmedia = ThumbnailSocialmedia::where('id', $id)->first();
        $socialmedia->link_thumbnail = $request->link_thumbnail;
        if ($request->hasFile('gambar_thumbnail')) {
            if ($socialmedia->gambar_thumbnail && file_exists(storage_path('app/public/' . $socialmedia->gambar_thumbnail))) {
                Storage::delete('public/' . $socialmedia->gambar_thumbnail);
            }
            $image_name = $request->file('gambar_thumbnail')->store('images_thumb-socialmedia', 'public');
            $socialmedia->gambar_thumbnail = $image_name;
        }

        $socialmedia->save();
        Alert::success('Data thumbnail berhasil diubah');
        return redirect()->route('thumbnail-socialmedia.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $socialmedia = ThumbnailSocialmedia::find($id);
        if ($socialmedia->gambar_thumbnail && file_exists(storage_path('app/public/' . $socialmedia->gambar_thumbnail))) {
            Storage::delete('public/' . $socialmedia->gambar_thumbnail);
        }
        $socialmedia->delete();
        Alert::success('Data thumbnail berhasil dihapus');
        return redirect()->route('thumbnail-socialmedia.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailActive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class ThumbnailActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active = ThumbnailActive::orderBy('created_at', 'desc')->get();
        return view('admin.active.index')->with('active', $active);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.active.create');
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
        $active = new ThumbnailActive();
        $active->judul_thumbnail = $request->judul_thumbnail;
        $active->link_thumbnail = $request->link_thumbnail;
        $active->gambar_thumbnail = $request->file('gambar_thumbnail')->store('images_thumb-active', 'public');
        $active->is_active = true;
        
        $active->save();
        Alert::success('Data thumbnail active berhasil ditambahkan');
        return redirect()->route('thumbnail-active.index');
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
        $active = ThumbnailActive::find($id);
        return view('admin.active.edit', compact('active'));
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

        $active = ThumbnailActive::where('id', $id)->first();
        $active->judul_thumbnail = $request->judul_thumbnail;
        $active->link_thumbnail = $request->link_thumbnail;
        if ($request->hasFile('gambar_thumbnail')) {
            if ($active->gambar_thumbnail && file_exists(storage_path('app/public/' . $active->gambar_thumbnail))) {
                Storage::delete('public/' . $active->gambar_thumbnail);
            }
            $image_name = $request->file('gambar_thumbnail')->store('images_thumb-active', 'public');
            $active->gambar_thumbnail = $image_name;
        }

        $active->save();
        Alert::success('Data thumbnail berhasil diubah');
        return redirect()->route('thumbnail-active.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $active = ThumbnailActive::find($id);
        if ($active->gambar_thumbnail && file_exists(storage_path('app/public/' . $active->gambar_thumbnail))) {
            Storage::delete('public/' . $active->gambar_thumbnail);
        }
        $active->delete();
        Alert::success('Data thumbnail berhasil dihapus');
        return redirect()->route('thumbnail-active.index');
    }
}

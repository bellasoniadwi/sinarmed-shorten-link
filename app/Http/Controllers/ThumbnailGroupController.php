<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class ThumbnailGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group = ThumbnailGroup::orderBy('created_at', 'desc')->get();
        return view('admin.group.index')->with('group', $group);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.group.create');
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
        $group = new ThumbnailGroup();
        $group->judul_thumbnail = $request->judul_thumbnail;
        $group->link_thumbnail = $request->link_thumbnail;
        $group->gambar_thumbnail = $request->file('gambar_thumbnail')->store('images_thumb-group', 'public');
        $group->is_active = true;
        
        $group->save();
        Alert::success('Data thumbnail group berhasil ditambahkan');
        return redirect()->route('thumbnail-group.index');
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
        $group = ThumbnailGroup::find($id);
        return view('admin.group.edit', compact('group'));
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

        $group = ThumbnailGroup::where('id', $id)->first();
        $group->judul_thumbnail = $request->judul_thumbnail;
        $group->link_thumbnail = $request->link_thumbnail;
        if ($request->hasFile('gambar_thumbnail')) {
            if ($group->gambar_thumbnail && file_exists(storage_path('app/public/' . $group->gambar_thumbnail))) {
                Storage::delete('public/' . $group->gambar_thumbnail);
            }
            $image_name = $request->file('gambar_thumbnail')->store('images_thumb-group', 'public');
            $group->gambar_thumbnail = $image_name;
        }

        $group->save();
        Alert::success('Data thumbnail berhasil diubah');
        return redirect()->route('thumbnail-group.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $group = ThumbnailGroup::find($id);
        if ($group->gambar_thumbnail && file_exists(storage_path('app/public/' . $group->gambar_thumbnail))) {
            Storage::delete('public/' . $group->gambar_thumbnail);
        }
        $group->delete();
        Alert::success('Data thumbnail berhasil dihapus');
        return redirect()->route('thumbnail-group.index');
    }

    public function updateStatus($id)
    {
        $group = ThumbnailGroup::find($id);

        if (!$group) {
            return redirect()->route('thumbnail-group.index')->with('error', 'Data Thumbnail Group tidak ditemukan.');
        }

        $group->is_active = !$group->is_active;

        $group->save();

        return redirect()->route('thumbnail-group.index')->with('success', 'Status Thumbnail berhasil diubah.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailNonactive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class ThumbnailNonactiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nonactive = ThumbnailNonactive::orderBy('created_at', 'desc')->get();
        return view('admin.nonactive.index')->with('nonactive', $nonactive);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.nonactive.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_thumbnail' => 'required',
            'link_thumbnail' => 'required',
        ]);
        $nonactive = new ThumbnailNonactive();
        $nonactive->judul_thumbnail = $request->judul_thumbnail;
        $nonactive->link_thumbnail = $request->link_thumbnail;
        $nonactive->is_active = true;
        
        $nonactive->save();
        Alert::success('Data thumbnail nonactive berhasil ditambahkan');
        return redirect()->route('thumbnail-nonactive.index');
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
        $nonactive = ThumbnailNonactive::find($id);
        return view('admin.nonactive.edit', compact('nonactive'));
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

        $nonactive = ThumbnailNonactive::where('id', $id)->first();
        $nonactive->judul_thumbnail = $request->judul_thumbnail;
        $nonactive->link_thumbnail = $request->link_thumbnail;

        $nonactive->save();
        Alert::success('Data thumbnail berhasil diubah');
        return redirect()->route('thumbnail-nonactive.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ThumbnailNonactive::find($id)->delete();
        Alert::success('Data thumbnail berhasil dihapus');
        return redirect()->route('thumbnail-nonactive.index');
    }
}

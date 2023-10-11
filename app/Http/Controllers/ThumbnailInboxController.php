<?php

namespace App\Http\Controllers;

use App\Models\ThumbnailInbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class ThumbnailInboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inbox = ThumbnailInbox::orderBy('created_at', 'desc')->get();
        return view('admin.inbox.index')->with('inbox', $inbox);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inbox = ThumbnailInbox::find($id);
        return view('admin.inbox.detail')->with('inbox', $inbox);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

    
}

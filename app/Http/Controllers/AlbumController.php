<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albuns = Album::all();
        return $albuns;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'cover_url' => 'required|string|url',
            'artist' => 'required|string'
        ]);
        $album = Album::create($validated);
        return $album;

    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return $album;
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     $album = Album::findOrFail($id);
    //     return $album;
    // }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'cover_url' => 'required|string|url',
            'artist' => 'required|string'
        ]);
        $album->update($validated);
        return $album;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::findOrFail($id);
        $album->delete();
        return response()->json(null, 204);
    }
}

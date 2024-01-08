<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playlist = Playlist::all();
        return view('playlist.index', ['playlist'=>$playlist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playlist.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => "string|required"
        ]);

        Playlist::create([
            'name' => $request->name,
        ]);
        return redirect(route("playlist.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        return view('playlist.show', ['playlist'=>$playlist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();
        return redirect()->route('playlist.index');
    }
}

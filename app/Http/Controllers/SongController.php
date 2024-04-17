<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    public function show($id)
    {
        $song = Song::findOrFail($id);
        return view('songs.show', compact('song'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'singer' => 'nullable',
        ]);

        Song::create($request->all());

        return redirect('/songs');
    }

    public function edit($id)
    {
        $song = Song::findOrFail($id);
        return view('songs.edit', compact('song'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'singer' => 'nullable',
        ]);

        $song = Song::findOrFail($id);
        $song->update($request->all());

        return redirect('/songs');
    }

    public function destroy($id)
    {
        $song = Song::findOrFail($id);
        $song->delete();
    
        return redirect('/songs');
    }
}
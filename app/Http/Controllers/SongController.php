<?php

// SongController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = session('songs', []); // Retrieve songs array from session, default to empty array
        return view('songs.index', compact('songs'));
    }

    public function show($index)
    {
        $songs = session('songs', []); // Retrieve songs array from session, default to empty array
        $song = $songs[$index];
        return view('songs.show', compact('song'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'song_title' => 'required',
        ]);

        $songs = session('songs', []); // Retrieve songs array from session, default to empty array
        $songs[] = $request->input('song_title');
        session(['songs' => $songs]); // Store updated songs array in session

        return redirect('/songs');
    }

    public function edit($index)
    {
        $songs = session('songs', []); // Retrieve songs array from session, default to empty array
        $song = $songs[$index];
        return view('songs.edit', compact('song', 'index'));
    }

    public function update(Request $request, $index)
    {
        $request->validate([
            'song_title' => 'required',
        ]);

        $songs = session('songs', []); // Retrieve songs array from session, default to empty array
        $songs[$index] = $request->input('song_title');
        session(['songs' => $songs]); // Store updated songs array in session

        return redirect('/songs');
    }
}
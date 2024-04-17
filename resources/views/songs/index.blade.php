<!-- resources/views/songs/index.blade.php -->

@extends('layouts.app')

@section('title', 'List of Songs')

@section('content')
    <h1>Songs:</h1>
    <ul>
    @foreach($songs as $song)
        <li>{{ $song->title }} | 
            <a href="{{ route('songs.show', $song->id) }}">View</a> | 
            <a href="{{ route('songs.edit', $song->id) }}">Edit</a> | 
            <form method="POST" action="{{ route('songs.destroy', $song->id) }}" style="display:inline;">
            @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this song?')">Delete</button>
            </form>
        </li>
    @endforeach
    </ul>
    <a href="{{ route('songs.create') }}">Add New Song</a>
@endsection
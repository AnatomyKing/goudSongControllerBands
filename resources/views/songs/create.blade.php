<!-- resources/views/songs/create.blade.php -->

@extends('layouts.app')

@section('title', 'Add New Song')

@section('content')
    <h1>Add New Song</h1>
    <form method="POST" action="{{ url('/songs') }}">
        @csrf
        <input type="text" name="song_title" placeholder="Song Title">
        <button type="submit">Add Song</button>
    </form>
@endsection

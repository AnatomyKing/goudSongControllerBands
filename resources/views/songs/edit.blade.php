<!-- resources/views/songs/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Song - ' . $song)

@section('content')
    <h1>Edit Song - {{ $song }}</h1>
    <form method="POST" action="{{ url('/songs/' . $index) }}">
        @csrf
        @method('PUT')
        <input type="text" name="song_title" value="{{ $song }}">
        <button type="submit">Update Song</button>
    </form>
@endsection

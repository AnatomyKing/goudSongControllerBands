<!-- resources/views/songs/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Song - ' . $song->title)

@section('content')
    <h1>Edit Song - {{ $song->title }}</h1>
    <form method="POST" action="{{ route('songs.update', $song->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $song->title }}">
        <input type="text" name="singer" value="{{ $song->singer }}">
        <button type="submit">Update Song</button>
    </form>
@endsection
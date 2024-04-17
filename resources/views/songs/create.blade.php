<!-- resources/views/songs/create.blade.php -->

@extends('layouts.app')

@section('title', 'Add New Song')

@section('content')
    <h1>Add New Song</h1>
    <form method="POST" action="{{ route('songs.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="singer" placeholder="Singer">
        <button type="submit">Add Song</button>
    </form>
@endsection
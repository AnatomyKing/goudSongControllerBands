<!-- resources/views/songs/index.blade.php -->

@extends('layouts.app')

@section('title', 'List of Songs')

@section('content')
    <h1>List of Songs</h1>
    <ul>
        @foreach($songs as $index => $song)
            <li>{{ $song }} | <a href="{{ url('/songs/' . $index) }}">View</a> | <a href="{{ url('/songs/' . $index . '/edit') }}">Edit</a></li>
        @endforeach
    </ul>
    <a href="{{ url('/songs/create') }}">Add New Song</a>
@endsection

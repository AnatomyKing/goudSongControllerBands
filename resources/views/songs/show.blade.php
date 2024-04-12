<!-- resources/views/songs/show.blade.php -->

@extends('layouts.app')

@section('title', $song)

@section('content')
    <h1>{{ $song }}</h1>
    <!-- Display song details here -->
@endsection
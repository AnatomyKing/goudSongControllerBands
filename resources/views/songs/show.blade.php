<!-- resources/views/songs/show.blade.php -->

@extends('layouts.app')

@section('title', $song->title)

@section('content')
    <h1>{{ $song->title }}</h1>
    <p>{{ $song->singer }}</p>
@endsection

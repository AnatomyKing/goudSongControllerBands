<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return redirect('/songs');
});

Route::redirect('/home', '/songs'); // Redirect '/' to '/songs'

Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/create', [SongController::class, 'create']); // Define the route for creating a new song
Route::post('/songs', [SongController::class, 'store']);
Route::get('/songs/{index}', [SongController::class, 'show']);
Route::get('/songs/{index}/edit', [SongController::class, 'edit']);
Route::put('/songs/{index}', [SongController::class, 'update']);
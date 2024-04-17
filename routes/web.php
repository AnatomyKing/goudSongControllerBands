<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return redirect('/songs');
});

Route::redirect('/home', '/songs'); // Redirect '/' to '/songs'

Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
Route::get('/songs/{id}', [SongController::class, 'show'])->name('songs.show');
Route::get('/songs/{id}/edit', [SongController::class, 'edit'])->name('songs.edit');
Route::put('/songs/{id}', [SongController::class, 'update'])->name('songs.update');
Route::delete('/songs/{id}', [SongController::class, 'destroy'])->name('songs.destroy');
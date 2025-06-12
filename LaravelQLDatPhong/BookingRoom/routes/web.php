<?php

use Illuminate\Support\Facades\Route;
use App\Models\Room;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    $rooms = Room::all();
    return view('rooms.index', compact('rooms'));
});

Route::resource('rooms', RoomController::class);
Route::get('rooms/{id}/confirm-delete', [RoomController::class, 'confirmDelete'])->name('rooms.confirmDelete');

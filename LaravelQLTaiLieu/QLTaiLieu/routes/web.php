<?php

use Illuminate\Support\Facades\Route;
use App\Models\Room;
use App\Http\Controllers\RoomController;
use App\Models\DocType;

Route::get('/', function () {
    $rooms = Room::with('doctype')->get();
    return view('rooms.index', compact('rooms'));
});

Route::resource('rooms', RoomController::class);

//Route::get('rooms/{id}/confirm-delete', [RoomController::class, 'confirmDelete'])->name('rooms.confirmDelete');

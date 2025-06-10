<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThietBiController;
use App\Models\ThietBi;

Route::get('/', function () {
    return view('thietbis.index', [
        'thietbis' => ThietBi::all()
    ]);
});

Route::resource('thietbis', ThietBiController::class);

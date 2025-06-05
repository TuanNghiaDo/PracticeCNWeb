<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

Route::get('/', function () {
    return view('books.index', [
        'books' => Book::all()
    ]);
});
Route::resource('books', BookController::class);
Route::get('books/{id}/confirm-delete', [BookController::class, 'confirmDelete'])->name('books.confirmDelete');

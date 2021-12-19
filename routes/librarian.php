<?php

use App\Http\Controllers\Api\LibrarianController;

Route::get('/', function (){
    return response()->json(['message' => 'Hello Librarian!']);
});

Route::get('most-issued-books-monthly', [LibrarianController::class, 'librarianWithTheMostIssuedBooksMonthly']);

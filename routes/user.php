<?php

use App\Http\Controllers\Api\UserController;

Route::get('/', function (){

    return response()->json(['message' => 'Hello User!']);
});

Route::post('books/borrow/{librarianId}/{bookItemId}', [UserController::class, 'borrowBook']);

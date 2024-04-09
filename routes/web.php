<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'] )->name('saveItem');
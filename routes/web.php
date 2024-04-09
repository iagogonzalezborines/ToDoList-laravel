<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class, 'index'] );


Route::post('/SaveItemRoute', [TodoListController::class, 'saveItem'] )->name('saveItem');

Route::post('/ToggleCompletedRoute/{id}', [TodoListController::class, 'toggleCompleted'] )->name('toggleCompleted');

Route::post('/deleteItemRoute/{id}', [TodoListController::class, 'deleteItem'] )->name('deleteItem');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('todo.index');
});

Route::get('/', [TodoController::class, 'index'])->name('todo.index');

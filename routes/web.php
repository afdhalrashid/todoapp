<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::post('/add', [TodoController::class, 'add'])->name('todo.add');
Route::post('/toggle/{index}', [TodoController::class, 'toggle'])->name('todo.toggle');
Route::delete('/delete/{index}', [TodoController::class, 'delete'])->name('todo.delete');
Route::post('/reset}', [TodoController::class, 'reset'])->name('todo.reset');
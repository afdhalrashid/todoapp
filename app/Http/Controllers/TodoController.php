<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = session('todos', []);
        return view('todo.index', compact('todos'));
    }

   
}

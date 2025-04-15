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

    public function add(Request $request)
    {
        $request->validate([
            'task' => 'required|string|max:255',
        ]);

        $task = $request->input('task');
        $todos = session('todos', []);

        // Add the new task to the beginning of the array
        array_unshift($todos, ['task' => $task, 'completed' => false]);

        session(['todos' => $todos]);

        return redirect()->route('todo.index');
    }

    public function toggle(Request $request, $index)
    {
        $todos = session('todos', []);

        if (isset($todos[$index])) {
            $todos[$index]['completed'] = !$todos[$index]['completed'];
            session(['todos' => $todos]);
        }

        return redirect()->route('todo.index');
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do App</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .container {
            width: 500px;
            margin: 50px auto;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
            display: flex;
        }
        input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }
        button[type="submit"] {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        li:last-child {
            border-bottom: none;
        }
        .completed {
            text-decoration: line-through;
            color: #777;
        }
        .actions {
            margin-left: auto;
        }
        .actions button {
            background: none;
            border: none;
            cursor: pointer;
            margin-left: 5px;
            padding: 5px;
            border-radius: 3px;
        }
        .actions button.toggle {
            color: green;
        }
        .actions button.delete {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My To-Do List</h1>

        <form action="{{ route('todo.add') }}" method="POST">
            @csrf
            <input type="text" name="task" placeholder="Add new task" required>
            <button type="submit">Add</button>
        </form>

        <ul>
            @forelse ($todos as $index => $todo)
                <li>
                    <span class="{{ $todo['completed'] ? 'completed' : '' }}">
                        {{ $todo['task'] }}
                    </span>
                    
                </li>
            @empty
                <li>No tasks yet!</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
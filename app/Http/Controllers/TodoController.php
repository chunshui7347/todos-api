<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Http\Requests\EditTodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Services\TodoServices;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $result = Todo::all();
        return response($result);
    }

    public function create(CreateTodoRequest $request)
    {
        $userId = Auth::user()->id;
        $name = $request->input('name');
        $result = TodoServices::createTodo($name, $userId);
        return response($result);
    }

    public function update(EditTodoRequest $request)
    {
        $id = (int) $request->input('id');
        $name = $request->input('name');
        $result = TodoServices::updateTodo($id, $name);
        return response($result);
    }

    public function delete(int $task)
    {
        $result = TodoServices::deleteTodo($task);
        return response($result);
    }

    public function completed(int $task)
    {
        $result = TodoServices::completeTodo($task);
        return response($result);
    }
}

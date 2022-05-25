<?php

namespace App\Services;

use App\Exceptions\TodoNotFoundException;
use App\Models\Todo;
use App\Repositories\TodoRepository;

class TodoServices
{
    public static function createTodo(string $name, int $userId): Todo
    {
        return TodoRepository::createTodo($name, $userId);
    }

    public static function updateTodo(int $id, string $name): Todo
    {
        $todo = Todo::find($id);
        if (!$todo) {
            throw new TodoNotFoundException('TODO not found by ID ', $todo);
        }
        return TodoRepository::updateTodo($id, $name);
    }

    public static function completeTodo(int $id): Todo
    {
        $todo = Todo::find($id);
        if (!$todo) {
            throw new TodoNotFoundException('TODO not found by ID ', $todo);
        }
        return TodoRepository::completeTodo($id);
    }

    public static function deleteTodo(int $id): bool
    {
        $todo = Todo::find($id);
        if (!$todo) {
            throw new TodoNotFoundException('TODO not found by ID ', $todo);
        }
        return TodoRepository::deleteTodo($id);
    }
}

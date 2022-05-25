<?php

namespace App\Services;

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
        return TodoRepository::updateTodo($id, $name);
    }

    public static function completeTodo(int $id): Todo
    {
        return TodoRepository::completeTodo($id);
    }

    public static function deleteTodo(int $id): bool
    {
        return TodoRepository::deleteTodo($id);
    }
}

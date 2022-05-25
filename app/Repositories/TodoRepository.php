<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository
{
    public static function createTodo(string $name, int $userId): Todo
    {
        return Todo::create([
            'name' => $name,
            'user_id' => $userId,
        ]);
    }

    public static function updateTodo(int $id, string $name): Todo
    {
        Todo::find($id)->update(['name' => $name]);
        return Todo::find($id);
    }

    public static function completeTodo(int $id): Todo
    {
        Todo::find($id)->update(['complete' => true]);
        return Todo::find($id);
    }

    public static function deleteTodo(int $id): bool
    {
        return Todo::find($id)->delete();
    }
}

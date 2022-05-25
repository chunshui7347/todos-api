<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'created_at',
        'update_at',
    ];

    /**
     * Belongs to users
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    //relacion inversa con user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos con tasks
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}

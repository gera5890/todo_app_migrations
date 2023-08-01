<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'status'
    ];

    //relacion inversa con todoList
    public function todo_list(){
        return $this->belongsTo(TodoList::class);
    }

    //relacion uno a muchos con steps
    public function steps(){
        return $this->hasMany(Steps::class);
    }

    //Relacion muchos a muchos con users
    public function Users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}

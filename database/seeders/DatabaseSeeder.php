<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Steps;
use App\Models\Task;
use App\Models\TodoList;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function($user){
            TodoList::factory(1)->create([
                'user_id' => $user->id
            ])->each(function($todoList){
                Task::factory(3)->create([
                    'todo_list_id' => $todoList->id
                ])->each(function ($task){
                    $task->users()->sync([
                        1,2,3
                    ]);
                    Steps::factory(1)->create();
                });
            });
        });



        
    }
}

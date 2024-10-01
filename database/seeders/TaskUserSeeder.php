<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = Task::all();
        $users = User::all();

        // Loop over tasks and assign random users
        foreach ($tasks as $task) {
            // Attach a random number of users to each task (between 1 and 3 users)
            $task->users()->attach(
                $users->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
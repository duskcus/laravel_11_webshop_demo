<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class Calendar extends Component
{
    public function render()
    {
        $calendarItems = [];

        // Get the ID of the logged-in user
        $userId = Auth::id();

        // Retrieve tasks associated with the logged-in user
        $tasks = Task::whereHas('users', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        // convert database data to usable array for both fullcalender and blade
        foreach ($tasks as $task) {
            $calendarItems[] = [
                'title' => $task->title . ' ('.$task->location.')',
                'start' => $task->start,
                'end' => $task->end,
                'description' => $task->description,
            ];
        }

        return view('livewire.calendar', ['calendarItems' => $calendarItems]);
    }
}

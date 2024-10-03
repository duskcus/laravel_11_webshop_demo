<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskIndex extends Component
{
    public function render()
    {
        $calendarItems = [];

        // $appointments = Appointment::with(['client', 'employee'])->get();
        $tasks = Task::all();

        foreach ($tasks as $task) {
            $calendarItems[] = [
                'title' => $task->title . ' ('.$task->title.')',
                'start' => $task->start,
                'end' => $task->end,
                'description' => $task->description,
            ];
        }

        return view('livewire.task-index', ['calendarItems' => $calendarItems]);
    }
}

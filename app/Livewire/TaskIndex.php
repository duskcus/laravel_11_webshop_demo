<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TestComponent extends Component
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
            ];
        }

        return view('livewire.test-component', ['calendarItems' => $calendarItems]);
    }
}

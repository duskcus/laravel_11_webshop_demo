@extends('layouts.calendar')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')

    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">
        <div class="inline-flex w-full">
            <h1 class="text-4xl font-bold mb-6">Edit {{$user->name}}'s' Calendar</h1>

            <div class="ml-auto">
                <button class="btn btn-success ml-auto">Create Task</button>
                <a href="{{route('calendars.show', $user->id)}}">
                    <button class="btn btn-secondary">View Mode</button>
                </a>
            </div>
        </div>

    @livewire('calendar-edit')

    </section>

@endsection

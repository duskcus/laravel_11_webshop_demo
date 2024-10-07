@extends('layouts.calendar')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')

    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">
        <div class="inline-flex w-full">
            <h1 class="text-4xl font-bold mb-6">Viewing {{$user->name}}'s' Calendar</h1>
            <a class="ml-auto" href="{{route('calendars.edit', $user->id)}}">
                <button class="btn btn-primary">Edit Mode</button>
            </a>
        </div>

    @livewire('calendar-show')

    </section>

@endsection

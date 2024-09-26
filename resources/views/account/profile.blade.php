@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">
        <h1 class="text-4xl font-bold mb-6">Profile</h1>

        <p>{{Auth::user()->name}}</p>
        <p>{{Auth::user()->email}}</p>
    </section>
@endsection

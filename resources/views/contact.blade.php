@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12 bg-neutral rounded-md shadow-mdg">
        <h1 class="text-4xl font-bold mb-6">Contact</h1>
        <form action="#" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="input block w-full mt-1 p-2" placeholder="Your Name">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="input block w-full mt-1 p-2" placeholder="you@example.com">
                </div>

                <div class="sm:col-span-2">
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" class="input block w-full mt-1 p-2" placeholder="Subject">
                </div>

                <div class="sm:col-span-2">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" class="input block w-full mt-1 p-2" placeholder="Your Message"></textarea>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="btn btn-primary">
                    Send Message
                </button>
            </div>
        </form>

    </section>
@endsection

@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>

        <form action="#" method="POST" class="mx-auto py-6 px-12 bg-base-100 rounded-md shadow-md">
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700" for="name">Name</label>
                    <input id="name" name="name" type="text" class="block w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300" placeholder="Your Name">
                </div>

                <div>
                    <label class="text-gray-700" for="email">Email</label>
                    <input id="email" name="email" type="email" class="block w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300" placeholder="you@example.com">
                </div>

                <div class="sm:col-span-2">
                    <label class="text-gray-700" for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" class="block w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300" placeholder="Subject">
                </div>

                <div class="sm:col-span-2">
                    <label class="text-gray-700" for="message">Message</label>
                    <textarea id="message" name="message" rows="5" class="block w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300" placeholder="Your Message"></textarea>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="px-4 py-2 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Send Message
                </button>
            </div>
        </form>

    </section>
@endsection

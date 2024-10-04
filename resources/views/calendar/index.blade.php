@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">
        <h1 class="text-4xl font-bold mb-6">Users</h1>

        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Favorite Color</th>
                    <th></th>
                </tr>
            </thead>
        <tbody>

                @foreach ($users as $user)
                <!-- row 1 -->
                <tr>
                    <th>
                        <label>
                        <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar">
                                <div class="mask mask-squircle h-12 w-12">
                            <img
                              src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                              alt="Avatar Tailwind CSS Component" />
                          </div>
                        </div>
                        <div>
                          <div class="font-bold"><a href="{{ route('calendars.show', $user->id) }}">{{ $user->name }}</a></div>
                          <div class="text-sm opacity-50">{{ $user->email }}</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      Zemlak, Daniel and Leannon
                      <br />
                      <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                    </td>
                    <td>Purple</td>
                    <th>
                      <button class="btn btn-ghost btn-xs">details</button>
                    </th>
                  </tr>
                @endforeach
        </tbody>
            </table>
        </div>

    </section>
@endsection

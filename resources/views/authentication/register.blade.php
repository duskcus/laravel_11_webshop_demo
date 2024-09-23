@extends('layouts.no-nav-footer')

@section('content')
<section class="max-w-lg mx-auto p-6 bg-base-100 rounded-md shadow-md">
    <h2 class="text-lg font-semibold text-white text-center">Register</h2>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-control mt-4">
            <label class="label" for="name">
                <span class="label-text">Name</span>
            </label>
            <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Your Name" required>
        </div>

        <div class="form-control mt-4">
            <label class="label" for="email">
                <span class="label-text">Email</span>
            </label>
            <input type="email" name="email" id="email" class="input input-bordered w-full" placeholder="you@example.com" required>
        </div>

        <div class="form-control mt-4">
            <label class="label" for="password">
                <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" id="password" class="input input-bordered w-full" placeholder="Enter your password" required>
        </div>

        <div class="form-control mt-4">
            <label class="label" for="password_confirmation">
                <span class="label-text">Confirm Password</span>
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="input input-bordered w-full" placeholder="Confirm your password" required>
        </div>

        <div class="mt-6">
            <button type="submit" class="btn btn-primary w-full">Register</button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="link link-primary">Already have an account? Login here.</a>
        </div>
    </form>
</section>
@endsection

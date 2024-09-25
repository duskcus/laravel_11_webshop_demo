@extends('layouts.no-nav-footer')

@section('content')
<section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">
    <!-- Logo -->
    <div class="text-center flex-shrink-0 my-6 mx-auto hover:opacity-75">
        <!-- Img -->
        <a href="{{ route('home') }}"><span class="font-semibold text-xl">TLMOD</span></a>
    </div>

    <form action="{{ route('login') }}" method="POST">
        @csrf
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
            <label class="cursor-pointer flex items-center">
                <input type="checkbox" name="remember" class="checkbox">
                <span class="label-text ml-2">Remember me</span>
            </label>
        </div>

        <div class="mt-6">
            <button type="submit" class="btn btn-primary w-full">Login</button>
        </div>

        <div class="text-center mt-4">
            <a href="#" class="link link-primary">Forgot your password?</a>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="link link-primary">Sign up</a>
        </div>
    </form>
</section>
@endsection

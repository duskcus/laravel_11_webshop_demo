@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">

            @csrf

            <div class="form-control mt-4">
                <label class="label" for="name">
                    <span class="label-text">Name</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Name" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="price">
                    <span class="label-text">Price</span>
                </label>
                <input type="text" name="price" id="price" class="input input-bordered w-full" placeholder="Price" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="stock">
                    <span class="label-text">Stock</span>
                </label>
                <input type="text" name="stock" id="stock" class="input input-bordered w-full" placeholder="Stock" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="description">
                    <span class="label-text">Description</span>
                </label>
                <input type="text" name="description" id="description" class="input input-bordered w-full" placeholder="Description" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="image_url">
                    <span class="label-text">Image</span>
                </label>
                <input type="url" name="image_url" id="image_url" class="input input-bordered w-full" placeholder="Image">
            </div>
            <div class="form-control mt-4">
                <label class="label" for="category">
                    <span class="label-text">Category</span>
                </label>
                <input type="text" name="category" id="category" class="input input-bordered w-full" placeholder="Category" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="btn btn-primary w-full">Create</button>
            </div>

        </form>
    </section>
@endsection

@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        <form action="{{ route('products.update', $product->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-control mt-4">
                <label class="label" for="name">
                    <span class="label-text">Name</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Name" value="{{$product->name}}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="price">
                    <span class="label-text">Price</span>
                </label>
                <input type="text" name="price" id="price" class="input input-bordered w-full" placeholder="Price" value="{{$product->price}}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="stock">
                    <span class="label-text">Stock</span>
                </label>
                <input type="text" name="stock" id="stock" class="input input-bordered w-full" placeholder="Stock" value="{{$product->stock}}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="description">
                    <span class="label-text">Description</span>
                </label>
                <input type="text" name="description" id="description" class="input input-bordered w-full" placeholder="Description" value="{{$product->description}}" required>
            </div>
            {{-- TODO --}}
            <div class="form-control mt-4">
                <label class="label" for="image">
                    <span class="label-text">Image</span>
                </label>
                <input type="url" name="image" id="image" class="input input-bordered w-full" placeholder="Image" value="{{$product->image}}">
            </div>
            <div class="form-control mt-4">
                <label class="label" for="category">
                    <span class="label-text">Category</span>
                </label>
                <input type="text" name="category" id="category" class="input input-bordered w-full" placeholder="Category" value="{{$product->category}}" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="btn btn-primary w-full">Change</button>
            </div>

        </form>
    </section>
@endsection

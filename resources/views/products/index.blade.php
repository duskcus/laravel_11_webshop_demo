@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12">
        <h1 class="text-4xl font-bold mb-6">Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 p-6">
            @foreach ($products as $product)
                <div class="card bg-base-100 shadow-xl">
                    <figure>
                        <a href="{{ route('products.show', $product->id) }}"><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" /></a>
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

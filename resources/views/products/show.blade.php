@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        <div class="grid grid-cols-2 gap-6 p-6">
        <img class="h-[300px]" src="{{ $product->image ?? 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}" alt="Product Image">
        <div>
            <p class="text-2xl mb-6 capitalize">{{ $product->name }}</p>
            <p>{{ $product->description }}</p>
            <p>price: {{ $product->price }}</p>
            <p>stock: {{ $product->stock }}</p>
            <p>category: <a class="link" href="">{{ $product->category }}</a></p>
        </div>
        </div>
    </section>
@endsection

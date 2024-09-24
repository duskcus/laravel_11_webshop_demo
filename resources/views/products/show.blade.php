@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        <img class="w-[300px]" src="{{ $product->image ?? 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}" alt="Product Image">
        <p>{{ $product->name }}</p>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
        <p>{{ $product->stock }}</p>
        <p>{{ $product->category }}</p>

    </section>
@endsection

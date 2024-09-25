@extends('layouts.no-padding')

{{-- @SECTION FOR THE START CONTENT --}}

@section('content')
    {{-- HERO IMAGE SECTION --}}
    <div class="col-span-full">
        <figure class="relative">
            <img
            src="https://picsum.photos/1440/300"
            alt="Hero Image"
            class="w-full h-auto object-cover opacity-60"
            />
            <figcaption class="absolute bottom-0 left-0 p-4 bg-black bg-opacity-50 text-base-content">
                Made by ?:
            </figcaption>
        </figure>
    </div>

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6 p-6">

    @for ($i = 0; $i < 3; $i++)
        <div class="card card-compact bg-neutral shadow-xl">
            <figure>
                <a href="#">
                <img
                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                alt="Shoes" />
                </a>
            </figure>
            <div class="card-body">
                <h2 class="card-title">title</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    @endfor

    </section>

    {{-- @ENDSECTION FOR THE END OF CONTENT --}}

@endsection

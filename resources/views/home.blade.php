@extends('layouts.app')

@section('content')

    {{-- Hero Section - Dark & Luxurious Split Layout --}}
    <section class="d-flex align-items-center justify-content-between py-5 px-4 px-lg-5"
        style="background-color: #1A2521; min-height: 80vh;">
        <div class="container">
            <div class="row align-items-center">
                {{-- Text Content (Left) --}}
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <h1 class="display-3"
                        style="font-family: 'Playfair Display', serif; color: #D1A348; font-weight: 500;">
                        Carnivorous <br>Plants
                    </h1>
                    <p class="lead mt-3 mb-4" style="font-family: 'Roboto', sans-serif; color: #E0E0E0;">
                        Curated specimens for the discerning collector.
                    </p>
                    <a href="#featured-plants" class="btn btn-lg px-4 py-2 fw-bold"
                        style="background-color: #D1A348; color: #1A2521; border-radius: 2px;">
                        Explore Collections
                    </a>
                </div>

                {{-- Image (Right) - Adjust path as needed for dark theme image --}}
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="{{ asset('images/plant-hero.png') }}" alt="Luxurious Plant" class="img-fluid"
                        style="max-height: 50vh; object-fit: cover; border: 1px solid #D1A348;">
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Plants Section --}}
    <section id="featured-plants" class="py-5 px-4 px-md-0" style="background-color: #2D3D37;">
        <div class="container">
            <h2 class="text-center mb-5"
                style="font-family: 'Playfair Display', serif; color: #D1A348; font-weight: 400;">
                Seasonal Features
            </h2>

            <div id="menu" class="row g-4 justify-content-center">
                {{-- Loop over the plants --}}
                @foreach ($plants->slice(0, 4) as $plant)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        {{-- Ensure your x-plant-card looks good on a dark background --}}
                        <x-plant-card :plant="$plant" />
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="/menu" class="btn btn-lg px-5 py-2 fw-bold"
                    style="color: #D1A348; border: 1px solid #D1A348; border-radius: 2px; background-color: transparent;">
                    View All Specimens →
                </a>
            </div>
        </div>
    </section>
@endsection
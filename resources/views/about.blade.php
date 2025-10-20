@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="text-center text-white d-flex align-items-center justify-content-center flex-column"
        style="background: linear-gradient(rgba(59, 122, 87, 0.8), rgba(59, 122, 87, 0.8)), 
                url('{{ asset('images/plant-hero.png') }}') center/cover no-repeat; 
                height: 50vh;">
        <h1 class="mb-3" style="font-family: 'Pacifico'; font-size: 3.5rem;">Tentang Plants</h1>
        <p class="lead" style="font-size: 1.2rem; max-width: 600px;">
            Temukan dan koleksi tanaman terbaik,<br>semuanya di satu tempat!
        </p>
    </section>

    {{-- Our Story Section --}}
    <section class="py-5" style="background-color: #fff;">
        <div class="container d-flex justify-content-center">
            <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap text-center text-lg-start">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-4" style="font-family: 'Potta One'; color: #3B7A57;">Cerita Kami</h2>
                    <p class="mb-3" style="color: #1E293B; line-height: 1.8;">
                        Plants lahir dari kecintaan terhadap alam dan tanaman hias. Kami ingin membuat platform 
                        di mana pecinta tanaman bisa menemukan, merawat, dan membagikan keindahan tanaman mereka dengan mudah.
                    </p>
                    <p class="mb-3" style="color: #1E293B; line-height: 1.8;">
                        Dari koleksi tanaman indoor yang menyegarkan, hingga tanaman langka yang menawan — 
                        Plants hadir untuk membantu kamu menciptakan ruang hijau impian.
                    </p>
                </div>

                <div>
                    <img 
                        src="{{ asset('images/plant-story.png') }}" 
                        alt="Cerita Kami" 
                        class="img-fluid rounded shadow"
                        style="max-width: 400px; border-radius: 20px !important;">
                </div>
            </div>
        </div>
    </section>
@endsection

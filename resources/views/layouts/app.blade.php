<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MealBook')</title>

    {{-- ✅ Bootstrap CSS (use CDN to ensure it always loads) --}}
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    >

    {{-- ✅ Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- ✅ Custom CSS (optional, if file exists) --}}
    @if (file_exists(public_path('css/custom.css')))
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @endif

    {{-- ✅ Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    {{-- Page-Specific CSS --}}
    @yield('head')

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #1E293B;
            background-color: #f8f9fa;
        }

        section {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            color: #1E293B;
            text-align: center;
        }

        p {
            line-height: 1.6;
            color: #374151;
            text-align: center;
        }

        .hero-text {
            color: white !important;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    {{-- ✅ Navbar --}}
    @include('layouts.navbar')

    {{-- ✅ Main Content --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- ✅ Footer --}}
    @include('layouts.footer')

    {{-- ✅ Bootstrap JS (use CDN for reliability) --}}
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
</body>
</html>

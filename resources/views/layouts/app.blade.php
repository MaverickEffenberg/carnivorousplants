<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Carnivorous Plants')</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Merriweather:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    @if (file_exists(public_path('css/custom.css')))
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @endif

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    @yield('head')

    <style>
        /* FIX #1: Ensure smooth scroll is globally enabled */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: #1E293B;
            background-color: #f8f9fa;
        }

        section {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        h1, h2, h3, h4 {
            font-family: 'Merriweather', serif;
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

        .accent {
            font-family: 'Playfair Display', serif;
            color: #4caf50;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('layouts.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous"></script>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        
        // Function to perform the actual smooth scroll
        function doSmoothScroll(hash) {
            // Check if the hash is valid and the target element exists
            if (hash && hash.length > 1 && $(hash).length) {
                const target = $(hash);
                
                $('html, body').animate({
                    // Scroll to the target element's top position
                    scrollTop: target.offset().top
                }, 800);
                
                // Update the URL hash without a sudden jump (for history/bookmarking)
                window.history.pushState(null, null, hash);
            }
        }

        // 1. Handle anchor links clicked anywhere on the site
        $('a[href*="#"]').on('click', function(e) {
            const href = $(this).attr('href');
            const [baseUrl, hash] = href.split('#');
            
            // Check if the link has a hash and the hash target exists on the current page.
            // We strip leading/trailing slashes for a cleaner comparison.
            const currentPath = window.location.pathname.replace(/^\/|\/$/g, '');
            
            // Check if:
            // a) The base URL is empty (e.g., href="#menu" on current page)
            // b) The link's base URL matches the current page's path (e.g., href="/about#anchor" on /about)
            // c) The link's base URL points to the root/home path (e.g., href="/" or href="{{ route('home') }}")
            if (hash && (baseUrl === '' || currentPath === baseUrl.replace(/^\/|\/$/g, ''))) {
                e.preventDefault();
                doSmoothScroll('#' + hash);
            }
            // For cross-page links (e.g., /about clicking on /#menu), 
            // the smooth scroll is handled by the page load block below.
        });

        // 2. Handle scroll on page load if a hash is present 
        // (CRUCIAL for when navigating from /about to /home#menu)
        if (window.location.hash) {
            // Use a short timeout to ensure all page elements have finished rendering before scrolling
            setTimeout(() => doSmoothScroll(window.location.hash), 100);
        }
    });
</script>

</body>
</html>
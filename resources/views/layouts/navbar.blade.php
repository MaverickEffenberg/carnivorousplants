<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #6E6435;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}" style="font-family: 'Playfair Display', serif; color: #D1A348;">
            Carnivorous Plants
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white **scroll-link**" href="{{ route('home') }}#menu">Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('cart') }}">
                        <i class="bi bi-cart fs-4"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="bi bi-person-circle fs-4"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
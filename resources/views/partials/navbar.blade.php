<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">HOTEL VLOYVE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/tipeKamar">Kamar</a>
                <a class="nav-link" href="/fasilitasHotel">Fasilitas</a>
                <a class="nav-link" href="/kontak">Kontak</a>
                <a class="nav-link" href="/gallery">Gallery</a>
            </div>

            @auth
            <div class="navbar-nav dropdown ms-auto">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Hi!, {{ auth()->user()->nama }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/#"><i class="bi bi-layout-text-sidebar-reverse"></i> User</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>
                                Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @else
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </div>
            @endauth

        </div>
    </div>
</nav>
<header class="d-flex flex-column align-items-center">
    <div class="top-header container-fluid d-flex justify-content-between align-items-center py-1">
        <div class="col-xl-3 col-lg-1 col-md-1 col-sm-2">
            <a href="/">
                <img class="logo ms-2" src="{{ asset('img/herny_svet_logo.jpeg') }}" alt="logo herný svet">
            </a>
        </div>

        <form class="search col-xl-6 col-lg-7 col-md-6 d-flex justify-content-center">
            <input class="search-input me-1" type="search" placeholder="Čo hľadáte? napr. Asus notebook" aria-label="Search">
            <button class="search-button header-button" type="submit"><i class="bi bi-search"></i></button>
        </form>


        @unless (Auth::check())
            <div class="d-flex flex-row justify-content-around justify-content-sm-center align-items-baseline col-xl-2 col-lg-2 col-md-3 col-sm-8">
                <a class="header-button ms-2" href="login">Prihlásenie</a>
                <a class="header-button ms-2" href="register">Registrácia</a>
            </div>
        @endunless
        @auth
            <div class="text-white">
                {{ Auth::user()->name }}&nbsp;|&nbsp;{{ Auth::user()->email }}
                <div>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                        this.closest('form').submit();">
                            {{ __('Odhlasenie') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
        <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 text-center">
            <a href="basket">
                <i class="fas fa-shopping-cart shopping-bag"></i>
            </a>

        </div>
    </div>

    <nav class="navbar navbar-light navbar-expand-md bottom-header">
        <div class="container-fluid ms-5 d-flex justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="filter">Domov</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="filter" id="pcLaptopDrop" role="button" aria-expanded="false">
                            Počítače a laptopy
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pcLaptopDrop">
                            <li><a class="dropdown-item" href="filter2">Lenovo</a></li>
                            <li><a class="dropdown-item" href="filter2">Acer</a></li>
                            <li><a class="dropdown-item" href="filter2">Asus</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="filter" id="konzolyDrop" role="button" aria-expanded="false">
                            Konzoly
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="konzolyDrop">
                            <li><a class="dropdown-item" href="filter2">XBOX</a></li>
                            <li><a class="dropdown-item" href="filter2">Playstation</a></li>
                            <li><a class="dropdown-item" href="filter2">Nintendo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="filter" id="hryDrop" role="button" aria-expanded="false">
                            Hry
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="hryDrop">
                            <li><a class="dropdown-item" href="filter2">Akčné</a></li>
                            <li><a class="dropdown-item" href="filter2">Fantasy</a></li>
                            <li><a class="dropdown-item" href="filter2">Jednoduché</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="filter" id="prislusenstvoDrop" role="button" aria-expanded="false">
                            Príslušenstvo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="prislusenstvoDrop">
                            <li><a class="dropdown-item" href="filter2">Monitory</a></li>
                            <li><a class="dropdown-item" href="filter2">Klávesnice</a></li>
                            <li><a class="dropdown-item" href="filter2">Slúchadla</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- HOVER JS -->
    <script src="{{asset("js/navbar-drop.js")}}"> </script>
</header>

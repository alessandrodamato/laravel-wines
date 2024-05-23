<header>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  text-white " aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " aria-current="page" href="{{ route('wines.index') }}">Lista
                            vini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " aria-current="page" href="{{ route('wines.create') }}">Crea
                            nuovo vino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " aria-current="page"
                            href="{{ route('wineries.index') }}">Gestisci vigne</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

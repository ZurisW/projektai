<nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand collapsed" href="/"><img id="MTS-logo" src="{{ asset('storage/img/mts.png') }}" alt="MTS"
                draggable="false" height="80" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-4" href="#!"><i class="fas fa-plus-circle pe-2"></i>Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4" href="#!"><i class="fas fa-heart pe-2"></i>Favourites</a>
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                        <a class="nav-link mx-4" href="{{ route('logout') }}">Hello, {{Auth::user()->name}} </a>
                    @else
                        <a class="nav-link mx-4" href="{{ route('login') }}">My MTS </a>
                    @endif
                </li>
                @if (Auth::check())
                <li class="nav-item ms-3">
                    <a class="btn btn-outline-light btn-rounded" href="{{ route('posts.create') }}"><i class="fas fa-plus-circle pe-2"></i>Post an ad</a>
                </li>
                @else
                <li class="nav-item ms-3">
                    <a class="btn btn-outline-light btn-rounded" href="{{ route('login') }}"><i class="fas fa-plus-circle pe-2"></i>Login to post an ad</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

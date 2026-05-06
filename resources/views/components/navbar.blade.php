<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

        <div class="collapse navbar-collapse show">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <span class="nav-link">Ciao {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('area-riservata') }}">Area Riservata</a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="#"
                            class="btn btn-outline-danger btn-sm"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
                        >
                            Logout
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

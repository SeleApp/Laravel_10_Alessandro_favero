<x-layout>
    <div class="text-center py-5">
        <h1 class="display-5 fw-bold">Benvenuto su {{ config('app.name', 'Laravel') }}</h1>
        <p class="lead mt-3">
            @auth
                Ciao {{ Auth::user()->name }}! Sei loggato.
                <a href="{{ route('area-riservata') }}" class="btn btn-primary ms-2">Vai all'Area Riservata</a>
            @else
                Esegui il login o registrati per accedere all'area riservata.
                <a href="{{ route('login') }}" class="btn btn-primary ms-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-secondary ms-2">Registrati</a>
            @endauth
        </p>
    </div>
</x-layout>

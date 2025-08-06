<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Devrin</title>
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {{-- HEADER --}}
    <header style="background-color:#084298;" class="text-white py-3 shadow-sm">
        <div class="container d-flex flex-column align-items-center">
            <h1 class="fw-bold">Portofolio Devrin</h1>
            <p class="mb-2">Web & Mobile Developer Enthusiast</p>
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a href="{{ url('/') }}#tentang" class="nav-link text-white">Tentang</a></li>
                    <li class="nav-item"><a href="{{ url('/') }}#sertifikat" class="nav-link text-white">Sertifikat</a></li>
                    <li class="nav-item"><a href="{{ url('/') }}#pengalaman" class="nav-link text-white">Portofolio</a></li>
                    <li class="nav-item"><a href="{{ url('/') }}#kontak" class="nav-link text-white">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="py-5">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer style="background-color:#084298;" class="text-white text-center py-3 mt-5">
        <p class="mb-0">© {{ date('Y') }} Portofolio Devrin - All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

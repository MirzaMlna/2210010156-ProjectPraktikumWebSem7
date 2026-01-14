<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PRAKTIKUM WEB - GAJI_2210010156</title>

    {{-- Vite --}}
    @vite([
        'resources/js/app.js',
        'resources/sass/app.scss'
    ])
</head>
<body class="bg-light">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Sistem Gaji
            </a>
        </div>
    </nav>

    {{-- Content --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center text-muted py-3">
        © {{ date('Y') }} Praktikum Web
    </footer>

</body>
</html>

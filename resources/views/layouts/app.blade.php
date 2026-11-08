
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'CineScope Admin')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="site-container">

        <header class="navbar">
            <a href="{{ route('movies.index') }}" class="brand">
                <span class="brand-icon">▶</span>
                <span>CineScope</span>
                <span class="admin-label">ADMIN</span>
            </a>

            <nav>
                <a href="{{ route('movies.index') }}">Películas</a>
                <a href="{{ route('movies.create') }}" class="nav-button">
                    + Agregar película
                </a>
            </nav>
        </header>

        <main class="main-content">
            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>

        <footer class="footer">
            <span>CineScope Admin</span>
            <span>Gestión de catálogo cinematográfico · 2026</span>
        </footer>

    </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panel admina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container d-flex justify-content-between">

        <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
            Panel admina
        </a>

        <div class="d-flex gap-2">

            
            <a href="{{ route('home') }}" class="btn btn-outline-light btn-sm">
                Powrót do strony głównej
            </a>

            
            <a href="{{ route('admin.questions') }}" class="btn btn-secondary btn-sm">
                Pytania
            </a>

            <a href="{{ route('admin.categories') }}" class="btn btn-success btn-sm">
                Dodaj kategorię
            </a>
            
            <a href="{{ route('admin.logout') }}" class="btn btn-danger btn-sm">
                Wyloguj
            </a>
        </div>
    </div>
</nav>

<div class="container">
    {{-- Miejsce na treść z widoków poprzednich --}}
    @yield('content')
</div>

</body>
</html>

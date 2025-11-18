<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Quizomat – Strona główna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Quizomat</h1>
            <p class="lead">Autor: Dominik Waleryszak</p>
            <p class="text-muted">Projekt zaliczeniowy z Programowania Zaawansowanego<br>prof. Rainer Bezzina</p>
        </div>

        <div class="mb-4">
            <h2 class="h5">Wybierz temat quizu:</h2>
        </div>

        <div class="row g-4">
            @foreach($topics as $topic)
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('quiz.show', $topic['id']) }}" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $topic['title'] }}</h5>
                                <p class="card-text small">{{ $topic['description'] }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wybierz quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <div class="container py-5">
        <h1 class="text-center mb-4">Wybierz temat quizu</h1>
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
        <div class="text-center mt-5">
            <a href="{{ route('home') }}" class="btn btn-outline-secondary">Powrót</a>
        </div>
    </div>
</body>
</html>

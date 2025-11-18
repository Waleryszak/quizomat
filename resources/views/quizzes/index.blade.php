<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Quizy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Tematy quizów</h1>

        <div class="row g-4">
            @foreach($topics as $topic)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h5 class="card-title text-center m-0">{{ $topic }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ url('/') }}" class="btn btn-outline-primary">Powrót</a>
        </div>
    </div>
</body>
</html>

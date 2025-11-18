<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $topic['title'] }} – Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <div class="container py-5">
        <h1 class="mb-4">{{ $topic['title'] }}</h1>
        <p class="text-muted">{{ $topic['description'] }}</p>
        <div class="alert alert-info mt-4">
            Tu będą pytania quizowe z kategorii <strong>{{ $topic['title'] }}</strong>.
        </div>
        <a href="{{ route('quizzes.index') }}" class="btn btn-secondary mt-3">Powrót do listy</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Quizomat – Strona główna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">
<div class="container py-5 text-center">

    <h1 class="display-4 mb-3">Quizomat</h1>
    <p class="lead">Projekt autorstwa Dominika Waleryszaka</p>
    <p class="text-muted">Aplikacja wykonana na potrzeby Programowania Zaawansowanego u prof. Rainera Bezziny</p>

    <a href="{{ route('quizzes.index') }}" class="btn btn-primary btn-lg mt-4 px-4">
        Rozpocznij
    </a>

</div>
</body>
</html>

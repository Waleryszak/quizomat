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
        <div class="text-center">
            <h1 class="display-4 mb-3">Quizomat</h1>
            <p class="lead">Aplikacja stworzona przez Dominika Waleryszaka</p>
            <p class="text-muted mb-4">
                Projekt zaliczeniowy z Programowania Zaawansowanego<br>
                Prowadzący: prof. Rainer Bezzina <br>
                Kliknij przycisk poniżej aby ropocząć
            </p>

            <a href="{{ route('quizzes.index') }}" class="btn btn-primary btn-lg px-4">
                Rozpocznij
            </a>
        </div>
    </div>
</body>
</html>

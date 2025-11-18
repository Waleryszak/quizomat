<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $topic['title'] }} – Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="refresh" content="{{ $score !== null ? 4 : 9999 }};url={{ route('quizzes.index') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container py-5">
    <h1 class="mb-3">{{ $topic['title'] }}</h1>
    <p class="text-muted">{{ $topic['description'] }}</p>

    @if(!is_null($score))
        <div class="alert alert-success mt-4">
            Twój wynik: <strong>{{ $score }}/{{ count($questions) }}</strong><br>
            Za chwilę wrócisz do listy quizów...
        </div>
    @else
        <form method="POST" action="{{ route('quiz.submit', $topic['id']) }}">
            @csrf
            @foreach($questions as $index => $q)
                <div class="mb-4">
                    <h5>{{ $index + 1 }}. {{ $q['question'] }}</h5>
                    @foreach($q['options'] as $option)
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="question_{{ $index }}"
                                value="{{ $option }}"
                                id="q{{ $index }}_{{ $loop->index }}"
                                required>
                            <label class="form-check-label" for="q{{ $index }}_{{ $loop->index }}">
                                {{ $option }}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach
            <button type="submit" class="btn btn-success">Zakończ quiz</button>
        </form>
    @endif
</div>
</body>
</html>

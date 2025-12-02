<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{{ $topic['title'] }} – Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @if($score !== null)
        <meta http-equiv="refresh" content="4;url={{ route('quizzes.index') }}">
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="container py-5">

    <h1 class="mb-3">{{ $topic['title'] }}</h1>
    <p class="text-muted">{{ $topic['description'] }}</p>

    @if($score !== null)

        <div class="alert alert-success mt-4">
            Twój wynik: <strong>{{ $score }}/{{ count($questions) }}</strong><br>
            Za chwilę wrócisz do wyboru quizów...
        </div>

    @else

        <form method="POST" action="{{ route('quiz.submit', $topic['id']) }}">
            @csrf
            {{-- budowanie nagłówka z treścią --}}
            @foreach($questions as $index => $q)
                <div class="mb-4">
                    <h5>{{ $index + 1 }}. {{ $q->question }}</h5>

                    <div class="form-check">
                        <input type="radio" name="question_{{ $index }}" value="{{ $q->option_a }}" class="form-check-input" id="a{{ $index }}" required>
                        <label class="form-check-label" for="a{{ $index }}">{{ $q->option_a }}</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="question_{{ $index }}" value="{{ $q->option_b }}" class="form-check-input" id="b{{ $index }}">
                        <label class="form-check-label" for="b{{ $index }}">{{ $q->option_b }}</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="question_{{ $index }}" value="{{ $q->option_c }}" class="form-check-input" id="c{{ $index }}">
                        <label class="form-check-label" for="c{{ $index }}">{{ $q->option_c }}</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="question_{{ $index }}" value="{{ $q->option_d }}" class="form-check-input" id="d{{ $index }}">
                        <label class="form-check-label" for="d{{ $index }}">{{ $q->option_d }}</label>
                    </div>
                </div>
            @endforeach

            <button type="submit" class="btn btn-success">Zakończ quiz</button>
        </form>

    @endif

</div>
</body>
</html>

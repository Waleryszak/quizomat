@extends('admin.layout')

@section('content')

<h3>Edytuj pytanie</h3>

@if($errors->any())
    <div class="alert alert-danger">Sprawdź pola formularza</div>
@endif

<form method="POST" action="{{ route('admin.update', $question->id) }}">
    @csrf

    <div class="mb-3">
        <label>Kategoria</label>
        <select name="category" class="form-control" required>
            <option value="">Wybierz kategorię</option>
            {{-- sprawdza kategorię pytania i ustawia atrybut selected w elemencie select. --}}
            <option value="historia" {{ $question->category == 'historia' ? 'selected' : '' }}>Historia</option>
            <option value="chemia" {{ $question->category == 'chemia' ? 'selected' : '' }}>Chemia</option>
            <option value="biologia" {{ $question->category == 'biologia' ? 'selected' : '' }}>Biologia</option>
            <option value="matematyka" {{ $question->category == 'matematyka' ? 'selected' : '' }}>Matematyka</option>
            <option value="przyroda" {{ $question->category == 'przyroda' ? 'selected' : '' }}>Przyroda</option>
            <option value="informatyka" {{ $question->category == 'informatyka' ? 'selected' : '' }}>Informatyka</option>
            <option value="edukacja" {{ $question->category == 'edukacja' ? 'selected' : '' }}>Edukacja dla bezpieczeństwa</option>
            <option value="geografia" {{ $question->category == 'geografia' ? 'selected' : '' }}>Geografia</option>
        </select>

    </div>

    <div class="mb-3">
        <label>Pytanie</label>
        <input name="question" class="form-control" value="{{ old('question', $question->question) }}">
    </div>

    <div class="mb-3">
        <label>Opcja A</label>
        <input name="option_a" class="form-control" value="{{ old('option_a', $question->option_a) }}">
    </div>

    <div class="mb-3">
        <label>Opcja B</label>
        <input name="option_b" class="form-control" value="{{ old('option_b', $question->option_b) }}">
    </div>

    <div class="mb-3">
        <label>Opcja C</label>
        <input name="option_c" class="form-control" value="{{ old('option_c', $question->option_c) }}">
    </div>

    <div class="mb-3">
        <label>Opcja D</label>
        <input name="option_d" class="form-control" value="{{ old('option_d', $question->option_d) }}">
    </div>

    <div class="mb-3">
        <label>Poprawna odpowiedź</label>
        <input name="correct" class="form-control" value="{{ old('correct', $question->correct) }}">
    </div>

    <button class="btn btn-primary">Zapisz</button>
</form>

@endsection

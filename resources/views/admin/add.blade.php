{{-- Rozszerzenie szablonu panelu admina oraz contentu --}}

@extends('admin.layout')

@section('content')

<h3>Dodaj pytanie</h3>

@if($errors->any())
    <div class="alert alert-danger">Sprawdź pola formularza</div>
@endif

<form method="POST" action="{{ route('admin.add.post') }}">
    @csrf

    <div class="mb-3">
        <label>Kategoria</label>
        <select name="category" class="form-control" required>
            <option value="">Wybierz kategorię</option>
            <option value="historia">Historia</option>
            <option value="chemia">Chemia</option>
            <option value="biologia">Biologia</option>
            <option value="matematyka">Matematyka</option>
            <option value="przyroda">Przyroda</option>
            <option value="informatyka">Informatyka</option>
            <option value="edukacja">Edukacja dla bezpieczeństwa</option>
            <option value="geografia">Geografia</option>
        </select>

    </div>

    <div class="mb-3">
        <label>Pytanie</label>
        <input name="question" class="form-control" value="{{ old('question') }}">
    </div>

    <div class="mb-3">
        <label>Opcja A</label>
        <input name="option_a" class="form-control" value="{{ old('option_a') }}">
    </div>

    <div class="mb-3">
        <label>Opcja B</label>
        <input name="option_b" class="form-control" value="{{ old('option_b') }}">
    </div>

    <div class="mb-3">
        <label>Opcja C</label>
        <input name="option_c" class="form-control" value="{{ old('option_c') }}">
    </div>

    <div class="mb-3">
        <label>Opcja D</label>
        <input name="option_d" class="form-control" value="{{ old('option_d') }}">
    </div>

    <div class="mb-3">
        <label>Poprawna odpowiedź (dokładny tekst)</label>
        <input name="correct" class="form-control" value="{{ old('correct') }}">
    </div>

    <button class="btn btn-success">Zapisz</button>
</form>

@endsection

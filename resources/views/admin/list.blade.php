@extends('admin.layout')

@section('content')

<h3>Pytania</h3>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="my-3">
    <a href="{{ route('admin.add') }}" class="btn btn-primary">Dodaj pytanie</a>
</div>

<form method="GET" class="mb-3">
    <select name="category" class="form-select" onchange="this.form.submit()">
        <option value="">Wszystkie kategorie</option>
        @foreach(\App\Models\Quiz::select('category')->distinct()->pluck('category') as $cat)
            <option value="{{ $cat }}" @if($category == $cat) selected @endif>{{ $cat }}</option>
        @endforeach
    </select>
</form>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Kategoria</th>
        <th>Pytanie</th>
        <th>Odpowiedzi</th>
        <th>Akcje</th>
    </tr>

    @foreach($questions as $q)
        <tr>
            <td>{{ $q->id }}</td>
            <td>{{ $q->category }}</td>
            <td>{{ $q->question }}</td>
            <td>
                A: {{ $q->option_a }}<br>
                B: {{ $q->option_b }}<br>
                C: {{ $q->option_c }}<br>
                D: {{ $q->option_d }}<br>
                Poprawna: <strong>{{ $q->correct }}</strong>
            </td>
            <td>
                <a href="{{ route('admin.edit', $q->id) }}" class="btn btn-warning btn-sm">Edytuj</a>
                <a href="{{ route('admin.delete', $q->id) }}" class="btn btn-danger btn-sm">Usuń</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $questions->links('pagination::simple-bootstrap-5') }}

@endsection

@extends('admin.layout')

@section('content')

<h3>Pytania</h3>

<div class="my-3">
    <a href="{{ route('admin.add') }}" class="btn btn-primary">Dodaj pytanie</a>
</div>

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
        <td>{{ $q->category->title ?? 'Brak kategorii' }}</td> 
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

@extends('admin.layout')

@section('content')
<h3>Lista kategorii</h3>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">Błąd: {{ $errors->first() }}</div>
@endif


<form method="POST" action="{{ route('admin.categories.store') }}" class="mb-4">
    @csrf
    <div class="row">
        <div class="col">
            <input name="slug" class="form-control" placeholder="Kategoria" required>
        </div>
        <div class="col">
            <input name="title" class="form-control" placeholder="tytuł" required>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-success">Dodaj</button>
        </div>
    </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kategoria</th>
            <th>Tytuł</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->slug }}</td>
                <td>{{ $cat->title }}</td>
                <td>
                    <form method="POST" action="{{ route('admin.category.delete', $cat->id) }}" onsubmit="return confirm('Na pewno usunąć?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

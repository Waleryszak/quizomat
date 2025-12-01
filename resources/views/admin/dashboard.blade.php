@extends('admin.layout')

@section('content')

<h2>Panel administracyjny</h2>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Łączna liczba pytań</h5>
            <h2>{{ $count }}</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Liczba kategorii</h5>
            <h2>{{ $categories }}</h2>
        </div>
    </div>
</div>

@endsection

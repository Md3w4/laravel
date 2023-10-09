@extends('layouts.main')

@section('container')
    <div class="mx-auto text-center">
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
        <h1>{{ $name }}</h1>
        <p>{{ $email }}</p>
    </div>
@endsection

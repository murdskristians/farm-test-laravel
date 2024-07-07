@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Animal Details</h1>
    <p><strong>Animal Number:</strong> {{ $animal->animal_number }}</p>
    <p><strong>Type:</strong> {{ $animal->type_name }}</p>
    <p><strong>Years:</strong> {{ $animal->years }}</p>
    <p><strong>Farm:</strong> {{ $animal->farm->name }}</p>
    <a href="{{ route('animals.index') }}" class="btn btn-primary">Back to Animals</a>
</div>
@endsection

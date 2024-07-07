@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Farm Details</h1>
    <p><strong>Name:</strong> {{ $farm->name }}</p>
    <p><strong>Email:</strong> {{ $farm->email }}</p>
    <p><strong>Website:</strong> <a href="{{ $farm->website }}" target="_blank">{{ $farm->website }}</a></p>
    <p><strong>Owner:</strong> {{ $user->name }}</p>

    <h2>Animals</h2>
    @if($animals->isEmpty())
        <p>No animals in this farm.</p>
    @else
        <ul>
            @foreach($animals as $animal)
                <li>{{ $animal->animal_number }} - {{ $animal->type_name }} ({{ $animal->years }} years old)</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('farms.index') }}" class="btn btn-primary">Back to Farms</a>
</div>
@endsection

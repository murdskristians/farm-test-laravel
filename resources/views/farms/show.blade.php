@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Farm Details</h1>
    <p><strong>Name:</strong> {{ $farm->name }}</p>
    <p><strong>Email:</strong> {{ $farm->email }}</p>
    <p><strong>Website:</strong> {{ $farm->website }}</p>
    <a href="{{ route('farms.index') }}" class="btn btn-primary">Back to Farms</a>
</div>
@endsection

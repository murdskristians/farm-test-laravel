@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Animal</h1>
    <form action="{{ route('animals.update', $animal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="animal_number">Animal Number</label>
            <input type="text" class="form-control" id="animal_number" name="animal_number" value="{{ $animal->animal_number }}" required>
        </div>
        <div class="form-group">
            <label for="type_name">Type</label>
            <input type="text" class="form-control" id="type_name" name="type_name" value="{{ $animal->type_name }}" required>
        </div>
        <div class="form-group">
            <label for="years">Years</label>
            <input type="number" class="form-control" id="years" name="years" value="{{ $animal->years }}">
        </div>
        <div class="form-group">
            <label for="farm_id">Farm</label>
            <select class="form-control" id="farm_id" name="farm_id" required>
                @foreach($farms as $farm)
                <option value="{{ $farm->id }}" {{ $farm->id == $animal->farm_id ? 'selected' : '' }}>{{ $farm->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Animal</button>
    </form>
</div>
@endsection

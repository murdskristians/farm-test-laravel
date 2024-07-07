@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Animals</h1>
    <a href="{{ route('animals.create') }}" class="btn btn-primary">Add Animal</a>
    <table class="table">
        <thead>
            <tr>
                <th>Animal Number</th>
                <th>Type</th>
                <th>Years</th>
                <th>Farm</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $animal)
            <tr>
                <td>{{ $animal->animal_number }}</td>
                <td>{{ $animal->type_name }}</td>
                <td>{{ $animal->years }}</td>
                <td>{{ optional($animal->farm)->name }}</td>
                <td>
                    <a href="{{ route('animals.show', $animal->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $animals->links() }}
</div>
@endsection

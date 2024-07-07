@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Farms</h1>
    <div class="mb-3">
        <a href="{{ route('farms.create') }}" class="btn btn-primary">Create Farm</a>
        <a href="{{ route('animals.index') }}" class="btn btn-secondary">View Animals</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($farms as $farm)
            <tr>
                <td>{{ $farm->name }}</td>
                <td>{{ $farm->email }}</td>
                <td>{{ $farm->website }}</td>
                <td>
                    @if($farm->user_id == auth()->id())
                        <a href="{{ route('farms.show', $farm->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('farms.edit', $farm->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('farms.destroy', $farm->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $farms->links() }}
</div>
@endsection

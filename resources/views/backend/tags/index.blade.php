<!-- resources/views/backend/tags/index.blade.php -->
@extends('backend.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tags</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('tags.create') }}" class="btn btn-primary mb-2">Create Tag</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->slug }}</td>
                            <td>
                                <a href="{{ route('tags.edit', $tag) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('tags.destroy', $tag) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
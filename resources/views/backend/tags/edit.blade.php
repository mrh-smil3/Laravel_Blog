<!-- resources/views/backend/categories/edit.blade.php -->
@extends('backend.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Tag</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $tag->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
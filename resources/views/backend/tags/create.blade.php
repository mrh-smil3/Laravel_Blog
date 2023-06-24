<!-- resources/views/backend/tags/create.blade.php -->
@extends('backend.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create Tag</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('tags.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
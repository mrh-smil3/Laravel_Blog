<!-- resources/views/backend/categories/create.blade.php -->
@extends('backend.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create New Category</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="parent_id">Parent Category:</label>
                    <select name="parent_id" id="parent_id" class="form-control">
                        <option value="">None</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
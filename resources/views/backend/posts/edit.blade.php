<!-- resources/views/backend/posts/edit.blade.php -->
@extends('backend.dashboard')
@section('content')
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <h1>Edit Post</h1>
 <form action="{{ route('posts.update', $post->id) }}" method="POST"
enctype="multipart/form-data">
 @csrf
@method('PUT')
<div class="form-group">
 <label for="title">Title</label>
 <input type="text" name="title" id="title" class="form-control"
value="{{ $post->title }}" required>
 </div>
 <div class="form-group">
 <label for="category_id">Category</label>
 <select name="category_id" id="category_id" class="formcontrol" required>
 <option value="">Select Category</option>
 @foreach ($categories as $category)
 <option value="{{ $category->id }}" {{ $category->id ==$post->category_id ? 'selected' : '' }}>
 {{ $category->name }}
 </option>
 @endforeach
 </select>
 </div>
<div class="form-group">
 <label for="content">Content</label>
 <textarea name="content" id="content" class="form-control"
rows="6" required>{{ $post->content }}</textarea>
 </div>
<div class="form-group">
 <label for="image">Image</label>
 <input type="file" name="image" id="image" class="form-controlfile">
 @if ($post->image)
 <img src="{{ asset('' . $post->image) }}" alt="Post Image"
style="max-width: 200px;">
 @endif
 </div>
<div class="form-group">
 <label for="published">Published</label>
 <div class="form-check">
 <input type="checkbox" name="published" id="published"
class="form-check-input" {{ $post->published ? 'checked' : '' }}>
 <label for="published" class="form-check-label">Yes</label>
 </div>
 </div>
 <div class="form-group">
 <label for="tags">Tags</label>
 <select name="tags[]" id="tags" class="form-control" multiple
required>
 @foreach ($tags as $tag)
<option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>
 {{ $tag->name }}
 </option>
@endforeach
 </select>
 </div>
<button type="submit" class="btn btn-primary">Update</button>
 </form>
 </div>
 </div>
 </div>
@endsection
<!-- resources/views/backend/posts/show.blade.php -->
@extends('backend.dashboard')
@section('content')
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <h1>{{ $post->title }}</h1>
 <p>Category: {{ $post->category->name }}</p>
 <p>Author: {{ $post->user->name }}</p>
 <p>Published: {{ $post->published ? 'Yes' : 'No' }}</p>
 <p>Published At: {{ $post->published_at }}</p>
 <p>Content: {{ $post->content }}</p>
 @if ($post->image)
 <img src="{{ asset('' . $post->image) }}" alt="Post Image"
style="max-width: 200px;">
 @endif
 <p>Tags:</p>
 <ul>
 @foreach ($post->tags as $tag)
 <li>{{ $tag->name }}</li>
 @endforeach
 </ul>
 </div>
 </div>
 </div>
@endsection
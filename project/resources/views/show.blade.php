@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.edit', $post) }}">Edit</a>
<form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('posts.index') }}">Back</a>
@endsection

@extends('layouts.main')
@section('container')

<article>
<h1 class = "mb-5">{{ $post->title }}</h1>
<p>by. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a>
<a href="/categories/{{ $post->category->slug }}"class="text-decoration-none"
> {{ $post->category->name }}</a></p>
<p>By. <a href="/authors/{{ $post->author->username }}" class = "text-decoration-none">{{ $post->author->username }}</a> in <a href="/categories/{{ $post->category->slug }}" class = "text-decoration-none"> {{ $post->category->name }}</a></p>

<h5>{{ $post->author }}</h5>

{!! $post->body !!}
</article>

<a href="/blog" class='d-block mt-3'>Back to Posts</a>
<a href="/blog" class="d-block mt-3">Back to Posts</a>
@endsection

@extends('layouts.main')

@section('container')

<article>
<h2>{{ $post->title }}</h2>
<p>by Guntur Pongky Prayusti in Programming {{<a href="/categories/{{ $post->category->slug }}"> $post->category->name }}< /   a></p>
{!!  $post->body !!}
</article>
    
<a href="/blog">Back to Posts</a>
@endsection
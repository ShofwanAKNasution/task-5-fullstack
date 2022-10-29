@extends('layouts.main')

@section('container')
    
    @foreach ($posts as $post)
    <article class="mb-5">
       <a href="/articles/{{ $post->slug }}">
        <h2>{{ $post->title }}</h2>
    </a> 
        <img src="images/{{ $post->image }}" alt="{{ $post['name'] }}" width="200" class="img-thumbnail rounded-circle">
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
    
    @endsection
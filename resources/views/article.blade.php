@extends('layouts.main')

@section('container')



      <article class="mb-5">
    
            <h2>{{ $post->title }}</h2>
      
           {!! $post->content !!}
        </article>


@endsection
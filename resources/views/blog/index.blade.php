@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card-columns">
            @foreach ($posts as $post)
        
                <div class="card">
                    <img src="{{ $post->featured_image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                    <p class="card-text post-excerpt">{{ $post->excerpt }}</p>
                    <p class="card-text"><small class="text-muted">{{ date('F j, Y', strtotime($post->created_at)) }}</small></p>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
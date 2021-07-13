@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="post-title">{{ $post->title }}</h2>
        <p class="post-author">{{ $author->name }} | {{ date('F j, Y', strtotime($post->created_at)) }}</p>

        <div class="article">
            {!! $post->body !!}
        </div>
        
    </div>
@endsection
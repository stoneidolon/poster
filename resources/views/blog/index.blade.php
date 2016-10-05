@extends('layout')

@section('title')
    <title>Blog</title>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset">
            <h1>Blog</h1>
        </div>
    </div>

    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8 col-md-offset">
                <h2>{{ $post->tile }}</h2>
                <h5>Pushlished: {{ $post->created_at->format('M j, Y h:ia') }}</h5>
                <p>{{ substr($post->body, 0, 250)}} {{ strlen($post->body) > 250 ? '...' : "" }}</p>
                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
                <hr>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@stop
@extends('layout')

@section('title')
    <title>View Post</title>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>

            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <div class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{ $post->created_at->format('M j, Y h:ia') }}</dd>
                </div>

                <div class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ $post->updated_at->format('M j, Y h:ia') }}</dd>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.destroy', 'Delete', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
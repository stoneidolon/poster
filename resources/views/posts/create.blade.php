@extends('layout')

@section('title')
<title>Create New Post</title>
@stop

@section('stylesheet')
{!! Html::style('css/parsley.css') !!}
@stop

@section('nav')
    <li><a href="/">Home </a></li>
    <li class="active"><a href="/about">About <span class="sr-only">(current)</span></a></li>
    <li><a href="/contact">Contact</a></li>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}
                {{ Form::label('body', "Post Body:") }}
                {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
                {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top: 20px']) }}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@stop
@extends('layout')

@section('title')
    <title>Edit Tags</title>
@stop

@section('content')

    {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) }}

        {{ Form::label('name', 'Title:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-h1-spacing']) }}

    {{ Form::close() }}

@stop
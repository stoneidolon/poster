@extends('layout')

@section('title')
<title>Create New Post</title>
@stop

@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '100']) }}

                {{ Form::label('category_id', "Category:") }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

                {{ Form::label('tag_id', "Tag:") }}
                {{ Form::select('tag_id[]', $tags, null, ['class' => 'form-control select2-muti', 'multiple' => 'multiple']) }}

                {{ Form::label('body', "Post Body:") }}
                {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}

                {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top: 20px']) }}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $('.select2-muti').select2();
    </script>
@stop
@extends('layout')

@section('title')
    <title>Edit Blog Post</title>
@stop

@section('stylesheet')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@stop

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('slug', null, ['class' => 'form-control input-lg']) }}

            {{ Form::label('category_id', 'Category:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

            {{ Form::label('tag_id', 'Tag:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-muti', 'multiple' => 'multiple']) }}

            {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
                        {!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        </div>
        {!! Form:: close() !!}
    </div><!-- end of .row(form) -->

@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $('.select2-muti').select2();
        $('.select2-muti').select2().val({!! json_encode($relatedID) !!}).trigger('change');
    </script>
@stop
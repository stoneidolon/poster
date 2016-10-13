@extends('layout')

@section('title')
    <title>All Tags</title>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <theade>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                    <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </theade>
            </table>
        </div><!-- end of .col-md-8 -->

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                <h2>New Tag</h2>
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
                {{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
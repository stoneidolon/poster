@extends('layout')

@section('title')
    <title>Login</title>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}

                {{ Form::label('password', 'Password:')}}
                {{ Form::password('password', ['class' => 'form-control'])}}

                <br>
                {{Form::checkbox('remember')}} {{Form::label('remember', 'Remember me')}}

                <br>
                {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}
            
                <p><a href="{{ url('password/reset') }}">Forgot My Password</a></p>
            {!! Form::close() !!}
        </div>
    </div>

@stop
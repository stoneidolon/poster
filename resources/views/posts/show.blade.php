@extends('layout')

@section('title')
    <title>View Post</title>
@stop

@section('nav')
    <li><a href="/">Home </a></li>
    <li class="active"><a href="/about">About <span class="sr-only">(current)</span></a></li>
    <li><a href="/contact">Contact</a></li>
@stop

@section('content')
    <p class="lead">This is the blog post</p>
@stop
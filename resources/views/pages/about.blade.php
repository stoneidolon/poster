@extends('layout')

@section('title')
<title>About Me</title>
@stop

@section('nav')
    <li><a href="/">Home </a></li>
    <li class="active"><a href="/about">About <span class="sr-only">(current)</span></a></li>
    <li><a href="/contact">Contact</a></li>
@stop

@section('content')
    <div class="row">
         <div class="col-md-12">
             <h1>About Me</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur fugiat, illo incidunt ipsam laudantium numquam provident quisquam ut voluptas? A aliquam cupiditate dignissimos dolorem fugit, id non quisquam ratione.</p>
         </div>
    </div>
@stop
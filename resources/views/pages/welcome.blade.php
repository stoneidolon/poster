@extends('layout')

@section('title')
<title>Laravel Poster</title>
@stop

@section('nav')
    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
@stop

@section('content')
    <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to Poster</h1>
                    <p>Thank you so much for visiting Poster</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div>

    <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda atque, blanditiis corporis culpa eos labore minus,
                        molestias odit repellat ullam vitae, voluptates.
                        Doloremque excepturi ipsa magni maiores mollitia
                        obcaecati voluptatibus?</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda atque, blanditiis corporis culpa eos labore minus,
                        molestias odit repellat ullam vitae, voluptates.
                        Doloremque excepturi ipsa magni maiores mollitia
                        obcaecati voluptatibus?</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda atque, blanditiis corporis culpa eos labore minus,
                        molestias odit repellat ullam vitae, voluptates.
                        Doloremque excepturi ipsa magni maiores mollitia
                        obcaecati voluptatibus?</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda atque, blanditiis corporis culpa eos labore minus,
                        molestias odit repellat ullam vitae, voluptates.
                        Doloremque excepturi ipsa magni maiores mollitia
                        obcaecati voluptatibus?</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>SideBar</h2>
            </div>
        </div>
@stop
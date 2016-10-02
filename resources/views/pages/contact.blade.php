@extends('layout')

@section('title')
<title>Contact Me</title>
@stop

@section('nav')
    <li><a href="/">Home </a></li>
    <li><a href="/about">About</a></li>
    <li class="active"><a href="/contact">Contact<span class="sr-only">(current)</span></a></li>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <form>
                <div class="form-group">
                    <label name="email" for="">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject" for="">Subject:</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message" for="">Message:</label>
                    <textarea class="form-control" rows="5" id="message" name="message">
                        </textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
@stop
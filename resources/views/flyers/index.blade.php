@extends('layout', [
                'page_title' => "Home Page",
                'page_header' => "Flyers Page"
                ])

@section('content')
        <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <p>This is the flyers page. Fucking amazing.</p>
    <p>
        <a href="/flyers/create" class="btn btn-primary">Create Flyer</a>
    </p>
@stop
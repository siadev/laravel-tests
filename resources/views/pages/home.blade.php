@extends('layout', [
                'page_title' => "Home Page"
                ])


@section('home-page')
    @include('pages.home-carousel')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <h1>Labour Bill</h1>
    <p>This is a template showcasing the optional theme stylesheet included in Bootstrap.
        Use it as a starting point to create something more unique by building on or modifying it.</p>
    <p>
        <a href="/flyers">Flyers</a>
    </p>

    <p>
        <a href="/flyers/create">Create Flyer</a>
    </p>


</div>
@stop

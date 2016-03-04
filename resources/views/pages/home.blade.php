@extends('layout', [
                'page_title'  => "Home Page",
                'page_header' => "Welcome to newsite !"
                ])


@section('home-page')
    @include('pages.home-carousel')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <h1>Labour Bill</h1>
    <p>This is a template showcasing the optional theme stylesheet included in Bootstrap.
        Use it as a starting point to create something more unique by building on or modifying it.</p>
    <div class="-align-center">
        <img src="/img/manifesto.png" alt="Our professional software craftsmanship">
    </div>



    </div>
@stop

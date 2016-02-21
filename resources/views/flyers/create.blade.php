@extends('layout', [
                'page_title' => "Home Page"
                ])

@section('content')
    <h1>Create Flyer</h1>
    <hr>
    <div class="row">
        <form method="post" action="/flyers" enctype="multipart/form-data" class="col-md-6">

            @include('flyers.form')

            @if ( count($errors) > 0 )
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>error: {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                {{ count($errors) }}
            @endif
        </form>
    </div>

@stop
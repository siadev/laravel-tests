@extends('layout', [
                'page_title' => "Home Page"
                ])

@section('content')
    <h3>Create your Flyer</h3>
    <hr>
    <div class="container">
        <div class="panel panel-info form-panel" >
            <div class="panel-heading">
                <h3 class="panel-title">Flyer details</h3>
            </div> {{-- panel-heading --}}

            <div class="panel-body panel-body-form">
                <form method="post" action="/flyers" enctype="multipart/form-data" class="col-md-12 right">
                    @include('flyers.form')
                </form>
            </div> {{-- Form Body --}}
        </div>  {{-- Main Frame --}}
    </div>
@stop

@section('scripts')
    <script>
       @if($errors->has())
        var msg='<img src="/img/line600.gif"><p>';

        @foreach ($errors->all() as $error)
                msg += '<img src="/img/icons/decline.gif"> {{ $error }} <p></p>';
        @endforeach
            showError(msg , 'The following fields need to be fixed:');
        @endif
    </script>

@stop


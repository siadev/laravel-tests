@extends('layout', [
                'page_title'   => " Display flyer",
                'page_header' => "Create your Flyer"
                ])


@section('content')
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
            @if ( substr($error, 0, 16) == "The place format" )
                $error = "The place field has an invalid value. See help to choose."
               msg += '<img src="/img/icons/decline.gif"> ' + $error + '<p></p>';
           @else
                msg += '<img src="/img/icons/decline.gif"> {{ $error }} <p></p>';
            @endif

        @endforeach
            showError(msg , 'The following fields need to be fixed:');
        @endif
    </script>

    @if (session()->has('flash_message_overlay'))
        <script>
            swal({
                title:  "{{ session('flash_message_overlay.title') }}",
                text:   "{{ session('flash_message_overlay.message') }}",
                type:   "{{ session('flash_message_overlay.alert') }}",
                timer:  1700,
                confirmButtonText: 'okay'
            });
        </script>
    @endif
@stop


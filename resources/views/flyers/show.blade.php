@extends('layout', [
                'page_title'  => " Flyers Page",
                'page_header' =>
                                $flyer->street . '&nbsp;&nbsp;&nbsp;&nbsp;&#13;' .
                                $flyer->price
                ])

@section('html_header')
    <link rel="stylesheet" href="/css/dropzone.min.css">
@stop


@section('content')
 <div class="row">
    <div class="col-md-3">
        Description
        <hr>
        <div class="detail-description">{!! nl2br($flyer->description) !!}</div>
    </div>
    <div class="col-md-9">

        @foreach($flyer->photos as $photo)
            <img src="/uploaded/photos/{{ $photo->path }}"> &nbsp;
        @endforeach
    </div>

<div class="row">
    <div class="col-md-12">
        <form id="addPhoto" name="addPhoto" action="/flyers/{{ $flyer->id }}/save-photo" class="dropzone">
            {{ csrf_field() }}
        </form>
    </div>
</div>


@stop

@section('scripts')
    <script type="text/javascript" src="/js/dropzone.min.js"></script>
    <script>
        Dropzone.options.addPhoto = {
            paramName: 'file',
            maxFilesize: 2,
            acceptedFiles: 'image/*'
        };
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
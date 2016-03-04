@extends('layout', [
                'page_title'   => " Display flyer",
                'page_header'  => " $flyer->street "
                ])

@section('content')

    <div class="panel panel-primary docs-panel">
            <div class="panel-heading">{{ $flyer->street }}</div>
            <div class="panel-body bg-success">
                <div class="row">
                    <div class="col-md-2  jumbotron" >Price</div>
                    <div class="col-md-10 jumbotron">{{ $flyer->price }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">City</div>
                    <div class="col-md-10">{{ $flyer->city }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">State</div>
                    <div class="col-md-10">{{ $flyer->state }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Postcode</div>
                    <div class="col-md-10">{{ $flyer->postcode }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Description</div>
                    <div class="col-md-10 detail-description">{!! nl2br($flyer->description) !!}</div>
                </div>


            </div>
            <div class="panel-footer">
                <p>Links</p>
                <a href="">none</a>
            </div>
        </div> {{-- docs-panel -  --}}


@stop

  
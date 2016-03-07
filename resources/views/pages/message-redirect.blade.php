@extends('layout', [
                'page_title'   => "",
                'page_header'  => "$error_title"
                ])
@section('content')



    @if (session()->has('flash_message'))
        there is a flash message in the house
        <script>
            swal({
                        title: "{{ session('flash_message.title') }}",
                        text: "{{ session('flash_message.message') }}",
                        type: "input",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        animation: "slide-from-top",
                        inputPlaceholder: "Type in a template name without extensions",
                        imageUrl: "/img/cms/template.png"

                    },
                    function(inputValue){
                        if (inputValue === false) return false;

                        if (inputValue === "") {
                            swal.showInputError("You need to write something!");
                            return false
                        }

                        swal("Nice!", "You wrote: " + inputValue,
                             "and I'll get around to programming the n" +
                             "ext part which is saving from Javascript");
                    });



        </script>

        {!! URL::previous() !!}


    @endif

    {{--<h1>{{ URL::previous() }}</h1>--}}

<SECTION class="error_container">
    <HEADER>$error_title</HEADER>
        <ARTICLE>
            $error_message
        </ARTICLE>
 </SECTION>
 @stop
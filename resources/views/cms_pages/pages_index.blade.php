@extends('layout', [
                'page_title'  => "CMS Page creation",
                'page_header' => "CMS Page creation"
                ])

@section('html_header')
    <!--suppress ALL -->
<script type="text/javascript" src="/js/vue.js" xmlns:v-on="http://www.w3.org/1999/xhtml"></script>
@stop


@section('content')
    @if ( ! \LaravelExamples\cmsTemplate::count() )
        <script>
            bootbox.prompt( "<p><img src='/img/cms/template.png'></p>" +
                            "<h3>No Template is defined.</h3> " +
                            "<p>You must create at least one template " +
                            "in order to create a page.</p>" +
                            "Enter a Template name " +
                            "with no spaces and no extension", function(result) {
                if (result === null) {
                    window.history.back();
                } else {
                    if ( !result.trim() ) {
                        bootbox.alert("Cannot have a blank field. " +
                                "Hit cancel to go back or type in a template name");
                        location.reload();
                    } else {
                        location.assign("/cms/templates/create?name="+result);
                    }

                }
            });
        </script>
    @else
        something in table
    @endif

@stop

@section('scripts')


@stop

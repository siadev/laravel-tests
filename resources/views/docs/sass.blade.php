@extends('layout', [
                'page_title' =>  "Home Page",
                'page_header' => "Sass basic usage"
                ])

@section('content')
    <div class="panel panel-primary docs-panel">
        <div class="panel-heading">Underscore: _partials</div>
        <div class="panel-body docs-info">
            <p>
                The underscore lets Sass know that the file is only a partial file and that it should
                not be generated into a CSS file. Sass partials are used with the @import directive.
                When importing you don't need to include the underscore.
                Examples:
            </p>
            <p>
                <img src="/img/docs/sass_partials_code.png"   alt="Partials Example">
                <img src="/img/docs/sass_partials.png"        alt="Partials Example">
            </p>

            <div class="panel-footer">
                <p>Links</p>
                <a href="http://codepen.io/hced/pen/FbdqC/">Verticle Alignment</a>
            </div>
        </div>

    </div> {{-- docs-panel - Partials --}}

    <div class="panel panel-primary docs-panel">
            <div class="panel-heading">Sass Variables</div>
            <div class="panel-body docs-info">
                <p>
                    Sass Variables are very easy to use. Let have a look at a .scss file.<br>
                    In this case we overwrite an existing bootstrap variable and make it
                    important, which makes sure that this line no matter where it is located
                    is the one that will always override other declarations.
                </p>

<pre class="docs-code">
$dropdown-divider-bg: #181c35 !important;

.divider {
    color: $dropdown-divider-bg;
}
</pre>


                <div class="panel-footer">
                    <p>Links</p>
                    <a href="http://sass-lang.com/guide">$Link-description$</a>
                </div>
            </div> 
    </div> {{-- docs-panel - Sass Variables --}}
        


@stop

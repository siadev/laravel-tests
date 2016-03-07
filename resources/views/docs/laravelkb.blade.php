@extends('layout', [
                'page_title' => "Laravel tips and tricks",
                'page_header' => "Laravel Knowledge Base"
                ])

@section('content')
    <div class="panel panel-primary docs-panel">
        <div class="panel-heading">New methods to a resource</div>
        <div class="panel-body docs-info">
            <p>
                Adding new methods to an existing Laravel resource. for new links.
            </p>
            <pre class="docs-code">
    <summary>Just add a route to that method separately, <b>before</b> you register the resource:</summary>
    Route::get('docs/sass',    'DocsController@sass');
    Route::get('docs/artisan', 'DocsController@artisan');
    Route::get('docs/phpdoc',  'DocsController@phpdoc');
    <b class="code-highlight">Route::resource('docs',    'DocsController');</b>
            </pre>

        </div>
        <div class="panel-footer">
            <p>Links</p>
            <a href="http://stackoverflow.com/questions/16661292/add-new-methods-to-a-resource-controller-in-laravel">
                Stack Overflow Answer</a>
        </div>
    </div> {{-- docs-panel - New methods to a resource --}}

@stop
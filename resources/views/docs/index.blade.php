@extends('layout', [
                'page_title' => "Home Page",
                'page_header' => "Documentation including Knowledge Base"
                ])

@section('content')

    <div class="panel panel-primary docs-panel">
        <div class="panel-heading">Documentation</div>
        <div class="panel-body docs-info">
            <p>
                This site was created for the sole purpose of obtaining
                packages for testing as well as defining tips and tricks
                and documenting them within this section.
            </p>
            <p>
                The links below are pages created to reference how something
                was achieved on this site.
            </p>
            <div class="row">
                <div class="col-md-3 btn-primary docs-links">
                    <p></p><p class="docs-cli">Installation</p>
                    <p><a href="/docs/sqlite"   class="btn btn-info">SQLite</a></p>
                    <p><a href="/docs/phpdoc"   class="btn btn-info">phpDocumentor</a></p>
                    <p><a href="/phpdocs"       class="btn btn-info">Generated phpDocumentor</a></p>
                    <p><a href="/docs/nginx_deployment" class="btn btn-info">Laravel Installation on nginx</a></p>
                </div> {{-- Installation --}}
                <div class="col-md-3 btn-info docs-links">
                    <p></p><p class="docs-cli">Classes</p>
                    <p><a href="#" class="btn btn-primary">WIP</a></p>
                </div> {{-- Classes --}}
                <div class="col-md-3 btn-primary docs-links">
                    <p></p><p class="docs-cli">CSS and Javascript</p>
                    <p><a href="/docs/sass" class="btn btn-info">Sass</a></p>
                </div> {{-- CSS and Javascript--}}
                <div class="col-md-3 btn-info docs-links">
                    <p></p><p class="docs-cli">Knowledge Base</p>
                </div>
            </div>

            <p></p>

            <div class="panel-footer">
                <p>Other Links</p>
                <p>none</p>
            </div>

        </div>

    </div>



@stop
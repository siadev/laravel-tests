@extends('layout', [
                'page_title'  => "Home Page",
                'page_header' => "Using Artisan Commands"
                ])

@section('content')

    <div class="panel panel-primary docs-panel">
        <div class="panel-heading">Migration</div>
        <div class="panel-body docs-info">
            <p>Artisan commands used for this site.</p>
            <div class="docs-cli">
                <p>php artisan migrate</p>
                <p>php artisan make:migration create_flyers_table --create="flyers"</p>
                <p>php artisan make:migration create_flyers_photos_table --create="flyers_photos"</p>
            </div>
            <p>&nbsp;</p>
            <div class="panel-footer">
                <p>Links</p>
                none
            </div>
        </div>
    </div>

    <div class="panel panel-primary docs-panel">
        <div class="panel-heading">Models</div>
        <div class="panel-body docs-info">
            <p>
                Always make models singular which refers to tables in plural
                <b>User model has a users table.</b>
            </p>
            <div class="docs-cli">
                <p>php artisan make:model Flyer</p>
                <span>
                    Note: You could have made Model and Migrate at the same time:
                </span>
                <p>php artisan make:model Flyer --migration</p>
                <span class="doc-note">or</span>
                <p>php artisan make:model Flyer -m</p>
                <p>php artisan make:model Photo</p>
                <span>Making a model and Migration at the same time <br>
                Note: when using camel Case or Pascal Case the migrations is
                      automatically expanded with an underscore as well as plural table name.
                      in the example below the result would be <b>cms_articles</b> for the migration.
                </span>
                <p>php artisan make:model cmsArticle -m  </p>
                <p>php artisan make:model cmsPage -m</p>
                <p>php artisan make:model cmsTemplates -m</p>
                <p>php artisan make:model cmsMenu -m</p>
            </div>

           <p>&nbsp;</p>


        </div>
    </div>

    <div class="panel panel-primary docs-panel">
        <div class="panel-heading">Other Artisan commands used</div>
        <div class="panel-body docs-info">
            <p>These are the other commands used for this tutorial.</p>
            <div class="docs-cli">
                <span>Changing Namespace:</span>
                <p>php artisan app:name LaravelExamples</p>
            </div>
            <p>&nbsp;</p>
        </div>
    </div> {{-- docs-panel - Other Artisan commands used --}}

@stop










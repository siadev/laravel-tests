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
                <summary>
                    Create boiler code for middleware security methods. <br>
                        This includes login/registration/password reset controllers and views. <br>

                </summary>
                <p>php artisan make:auth</p>
                <p>php artisan migrate</p>
                <p>php artisan make:migration create_flyers_table --create="flyers"</p>
                <p>php artisan make:migration create_flyers_photos_table --create="flyers_photos"</p>
                <summary>Seeding - Creating</summary>
                <p>php artisan make:seeder cmsPagesTable</p>
                <p>php artisan make:seeder cmsTemplatesTable</p>
                <p>php artisan make:seeder cmsArticlesTable</p>
                <p>php artisan make:seeder FlyersTable</p>
                <summary>Seeding - Deployment</summary>
                <p>php artisan db:seed</p>
                <summary>Refresh and Reset migrations as well as seeding</summary>
                <p>php artisan migrate:refresh --seed </p>
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
                <summary>
                    Note: You could have made Model and Migrate at the same time:
                </summary>
                <p>php artisan make:model Flyer --migration</p>
                <summary>or</summary>
                <p>php artisan make:model Flyer -m</p>
                <p>php artisan make:model Photo</p>
                <summary>Making a model and Migration at the same time <br>
                <b>Note:</b>
                      when using camel Case or Pascal Case the migrations is
                      automatically expanded with an underscore as well as plural table name.
                      in the example below the result would be <b>cms_articles</b>
                      for the migration table name.
                </summary>
                <p>php artisan make:model cmsArticle -m  </p>
                <p>php artisan make:model cmsPage -m</p>
                <p>php artisan make:model cmsTemplate -m</p>
                <p>php artisan make:model cmsMenu -m</p>
                <summary>
                    Creating validation requests for forms. These files are saved to:
                <pre>
                /srv/www/NEWSITE/app/Http/Requests
                </pre>
                    create a request file for each form to
                    break your code down to readable algorithm.
                </summary>
                <p>php artisan make:request FlyerRequest</p>
                <p>php artisan make:request TemplateRequest</p>
            </div>

           <p>&nbsp;</p>


        </div>
    </div>

    <div class="panel panel-primary docs-panel">
        <div class="panel-heading">Other Artisan commands used</div>
        <div class="panel-body docs-info">
            <p>These are the other commands used for this tutorial.</p>
            <div class="docs-cli">
                <summary>Changing Namespace:</summary>
                <p>php artisan app:name LaravelExamples</p>
                <p>composer dump-autoload</p>
                <p>php artisan tinker</p>
            </div>
            <p>&nbsp;</p>
        </div>
    </div> {{-- docs-panel - Other Artisan commands used --}}

@stop










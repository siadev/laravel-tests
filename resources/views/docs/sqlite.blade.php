@extends('layout', [
                'page_title'  => "Documentation - SQLITE",
                'page_header' => "Using SQLite"
                ])

@section('content')
    <div class="panel panel-primary docs-panel">
            <div class="panel-heading">Using SQLite</div>
            <div class="panel-body docs-info">
                <p>SQLite is a flat file database store one of the site's directory.</p>
                <div class="docs-cli">
                    <span>Make sure you have the driver before you start.</span>
                    <p>sudo apt-get install -y php5-sqlite</p>
                    <p>cd /srv/www/newsite</p>
                    <span>Create the SQLite empty file where you want it.</span>
                    <p>touch database/db.sqlite</p>
                    <span>Now you can migrate</span>
                    <p>php artisan migrate</p>
                    <span>in Ubuntu you can install SQLite database browser package</span>

                </div>
            </div>
            <div class="panel-footer">
                <p>Links</p>
                <p><a href="http://laravel-recipes.com/recipes/118/setting-up-the-sqlite-database-driver">Setting up the SQLite Database Driver</a></p>
                <p><a href="http://laravel-recipes.com/recipes/119/installing-sqlite">Installing SQLite</a></p>
                <p><a href="http://stackoverflow.com/questions/12601410/mysql-workbench-with-sqlite">SQLite Browsers</a></p>
            </div>
        </div> {{-- docs-panel - Using SQLite --}}

@stop

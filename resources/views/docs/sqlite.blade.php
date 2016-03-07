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
                    <summary>Make sure you have the driver before you start.</summary>
                    <p>sudo apt-get install -y php5-sqlite</p>
                    <p>cd /srv/www/newsite</p>
                    <summary>Create the SQLite empty file where you want it.</summary>
                    <p>touch database/db.sqlite</p>
                    <summary>Now you can migrate</summary>
                    <p>php artisan migrate</p>
                    <summary>in Ubuntu you can install SQLite database browser package</summary>

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

@extends('layout', [
                'page_title'  => "PHP Documentor",
                'page_header' => "phpDocumentor"
                ])

@section('content')
        <div class="panel panel-primary docs-panel">
                <div class="panel-heading">Installation</div>
                <div class="panel-body docs-info">
                    <p>
                        Download phpDocumentor.phar from
                        <a href="http://www.phpdoc.org/phpDocumentor.phar">http://www.phpdoc.org/phpDocumentor.phar</a>
                        and copy it to an accessible directory. I use ~/tools
                    </p>
                    <div class="docs-cli">
                        <span>
                            Before we start using phpDocumentor
                            make sure you have these three packages.  <br>
                            1) PHP 5.x (Off course)   <br>
                            2) intl extension for PHP <br>
                            3) Graphviz
                        </span>
                        <p>sudo apt-get install php5-intl</p>
                        <p>sudo apt-get install Graphviz</p>
                        <span>When all downloads are finished:</span>
                        <p>mkdir tools</p>
                        <p>cp ~/Downloads/phpDocumentor.phar ~/tools</p>
                        <p>vim ~/.bashrc</p>
                        <span>Add an Alias.</span>
                        <p>alias phpdoc="~/tools/phpDocumentor.phar"</p>
                        <span>Make sure permissions are set correctly.</span>
                        <p>sudo chmod 777 ~/tools/phpDocumentor.phar</p>

                        <span>Open a new terminal window and try it out.</span>
                        <p><b>cd /srw/www/newsite/public</b></p>
                        <span>Create a destination folder within your site</span>
                        <p>mkdir phpdocs</p>
                        <span><b>Option one:</b> One file to phpdocs directory</span>
                        <p>phpdoc -f app/User.php -t phpdoc</p>
                        <span><b>Option two (preferred):</b> Directory and below to phpdocs directory</span>
                        <p>phpdoc -d /srv/www/newsite/app -t phpdocs</p>
                        <span>Now edit the route file so you can include it in your view (DEV ONLY!!)</span>
                        <p>vim /srv/www/newsite/app/Http/routes.php</p>
                        <span>Insert this route</span>
                        <pre class="docs-code">
    // phpDocumentor generated files.place in the public folder.
    Route::get('/phpdocs', function() {
        return File::get(public_path() . '/phpdocs/index.html');
    });

        <b><img src="/img/buttons/next.png"> MAKE SURE TO REMOVE THIS FOR PRODUCTION <img src="/img/buttons/prev.png"></b>
                   or find a way to automate what you include in production.
                        </pre>
                    </div>
                </div>
                <div class="panel-footer">
                    <p>Links</p>
                    <a href="http://www.phpdoc.org/" target="_blank">PHPDocumentor Official site</a>
                </div>
            </div> {{-- docs-panel -  --}}

    <div class="panel panel-primary docs-panel">
            <div class="panel-heading">phpDocumentor for this site</div>
            <div class="panel-body docs-info">
                <iframe src="/phpdocs/index.html"
                        frameborder="0" width="100%" height="1000px">
                </iframe>
            </div>
            <div class="panel-footer">
                <p>Links</p>
                <p>None</p>
            </div>
        </div> {{-- docs-panel - phpDocumentor for this site --}}

@stop
@extends('layout', [
                'page_title'  => "nginx Deployment",
                'page_header' => "nginx Server installation for Laravel framework"
                ])

@section('content')
    <div class="panel panel-primary docs-panel">
        <div class="panel-heading"></div>
            <div class="panel-body docs-info">
                <p>
                    This section is a complete installation guide
                    which includes a procedural hierarchy from conception
                    to commencing deployment.
                </p>
                <p>Lets start by brain storming</p>
            <div class="list-group docs-bullet">
                <a href="#" class="list-group-item active">
                    Laravel Installation on a nginx server
                </a>
                <a href="#" class="list-group-item">Brain storming</a>
                <a href="#" class="list-group-item"><p>Naming the site and domain name for development.</p>
                    example: newsite.dev
                </a>
                <a href="#" class="list-group-item">Register the domain to make sure the site is reserved.</a>
                <a href="https://www.evernote.com/shard/s127/sh/0016640f-50b9-4d86-b3f5-981c392e0c26/f6282bb4589274f06d72f42f85813d9e" 
                   class="list-group-item" target="_blank">Storyboard </a>
                <a href="https://www.evernote.com/shard/s127/sh/7ff09a9f-4831-42ba-83a5-eac3cfcc1b45/39199fe6ac8637e925c2a52f01a92b07" 
                   class="list-group-item"  target="_blank">nginx setup for local development</a>
                <a href="#" class="list-group-item"  target="_blank">
                    <b>nginx configuration.</b>
                    Once the step above is completed
                    you would have created the file below. Edit this file.
                    <div class="docs-cli">
                        <p>vim /etc/nginx/sites-available/newsite.dev</p>
                    </div>
                    <div class="docs-code">
                    <span>Change:</span>
        <p>try_files $uri $uri/ =404;</p>
        <span>WITH:</span>
        <p>try_files $uri $uri/ /index.php$is_args$args;</p>
                    </div>
                </a>

                



           </div> {{-- List group --}}

        </div>
    <div class="panel-footer">
                <p>Links</p>
                <a href=""></a>
            </div>
        </div> {{-- docs-panel -  --}}
@stop
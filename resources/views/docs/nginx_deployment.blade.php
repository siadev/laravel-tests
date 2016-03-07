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
            <div class="list-group">
                <div class="list-group-item info-row active">
                    Laravel Installation on a nginx server
                </div>
                <div class="info-row">Brain storming</div>
                <div class="info-row">
                    <p>Naming the site and domain name for development.</p>
                    example: newsite.dev
                </div>
                <div class="info-row">
                        Register the domain to make sure the site is reserved.
                </div>
                <div class="info-row">
                    <a href="https://www.evernote.com/shard/s127/sh/0016640f-50b9-4d86-b3f5-981c392e0c26/f6282bb4589274f06d72f42f85813d9e"
                       target="_blank">Storyboard</a>
                </div>
                <div class="info-row">
                    <a href="https://www.evernote.com/shard/s127/sh/6cebe7c1-ccec-4cbc-97f0-73dcde0e78bb/9352b7cd1d1c09d2086f904dc89a2786"
                       target="_blank">nginx setup for local development</a>
                </div>
                <div class="info-row">
                    <a href="https://www.evernote.com/shard/s127/sh/6e312e9c-91b6-4d22-a381-32faf4277b34/f4bcdb30268932cde6a40ef51e1e213d"
                       target="_blank">
                        Laravel setup and configuration <br>
                        The instructions below is the same instructions and this link
                        will be deleted when I finish formatting it :)
                    </a>
                </div>
                <div  class="info-row"  >
                    <b>nginx configuration.</b>
                    Once the step above is completed
                    you would have created the file below. Edit this file.
                    <div class="docs-cli">
                        <p>vim /etc/nginx/sites-available/newsite.dev</p>
                    </div>
                    <div class="docs-code">
                        <summary>Change:</summary>
                        <p>try_files $uri $uri/ =404;</p>
                        <summary>WITH:</summary>
                        <p>try_files $uri $uri/ /index.php$is_args$args;</p>
                    </div>
                </div>
           </div> {{-- List group --}}

        </div>
    <div class="panel-footer">
                <p>Links</p>
                <a href=""></a>
            </div>
        </div> {{-- docs-panel -  --}}
@stop
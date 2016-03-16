@extends('layout', [
                'page_title'  => "Command Line",
                'page_header' => "Other command line instructions"
                ])

@section('content')

    <!--suppress CheckImageSize -->
<div class="panel panel-primary docs-panel">
            <div class="panel-heading">Command Line installations and configurations</div>
            <div class="panel-body docs-info">
                <div class="docs-cli">
                    <summary>
                        Change permissions of storage directory
                    </summary>
                    <p>sudo chmod -R 777 storage/</p>
                    <summary style="background-color: rgba(45, 74, 186, 0.88); color: white;">
                        <a href="https://nodejs.org/en/"><img src="/img/logos/nodejs.png"
                           alt="Nodejs" title="Nodejs" width="60px"></a>    <img src="/img/hspacer15.png">
                        <a href="https://www.npmjs.com/"><img src="/img/logos/npm-logo.svg"
                           alt="npm" title="npm" width="60px"></a>          <img src="/img/hspacer15.png">
                        <a href="https://www.python.org/"><img src="/img/logos/python-logo.png"
                           alt="Python" title="Python" width="90px"></a>    <img src="/img/hspacer15.png">
                        <a href="https://en.wikipedia.org/wiki/Curl_%28programming_language%29">
                            <img src="/img/logos/Curl_logo.gif"
                           alt="Curl" title="Curl" width="60px"></a>    <img src="/img/hspacer15.png">
                        <a href="https://java.com/en/download/">
                            <img src="/img/logos/java-logo.png"
                                 alt="Java" title="Java" width="60px"></a>  <img src="/img/hspacer15.png">
                        <a href="https://github.com/">
                            <img src="/img/logos/git.png"
                                 alt="Git" title="Git" width="60px"></a>  <img src="/img/hspacer15.png">
                        Install commons for web server.
                    </summary>
                    <p>sudo apt-get install -y curl python-software-properties python3.4 java-common nodejs npm git-core</p>
                    <summary>
                        <a href="https://getcomposer.org/" target="_blank">
                            <img src="/img/logos/logo-composer.png" alt="Gulp" width="35px"></a>
                        - Dependency Manager for PHP
                    </summary>
                    <p>curl -sS https://getcomposer.org/installer | php</p>
                    <p>sudo mv composer.phar /usr/local/bin/composer</p>
                    <p>PATH:~/.composer/vendor/bin</p>

                    <summary>
                        <a href="https://laravel.com/" target="_blank" style="color: rgba(231, 68, 48, 0.85)">
                            <img src="/img/logos/laravel-logo.png" alt="Laravel" width="35px"> Laravel </a>
                        - framework installed globally
                    </summary>
                    <p>composer global require "laravel/installer=~1.1"</p>

                    <p>sudo ln -s /usr/bin/nodejs /usr/bin/node</p>
                    <p>sudo chown -R $(whoami) $(npm config get prefix)/{lib/node_modules,bin,share}</p>
                    <p>sudo npm cache clean -f</p>
                    <p>sudo npm install -g n</p>
                    <p>npm install</p>
                    <p>npm install --global bower</p>
                    <summary>
                        <a href="http://gulpjs.com" target="_blank">
                        <img src="/img/logos/gulp-white-text.svg" alt="Gulp" width="50px"
                             style="background-color: rgba(206, 70, 70, 0.85); padding: 5px"></a>
                        - Automate and enhance your workflow
                    </summary>
                    <p>npm install --global gulp</p>
                    <p>npm update</p>
                    <p>bower init</p>
                    <p>bower search jquery</p>
                    <p>bower install jquery --save</p>
                    <p>bower install jqueryui --save</p>
                    <p>bower install toastr --save</p>
                    <summary><a href="http://t4t5.github.io/sweetalert/" target="_blank">
                            <img src="/img/logos/sweet-alert.png"
                                 alt="Sweet Alert" name="Sweet Alert" width="85px"></a>
                        - A beautiful replacement for JavaScript's "Alert"
                    </summary>
                    <p>bower install sweetalert --save</p>
                    <p>bower install bootstrap-sweetalert</p>
                    <p>bower install Font-Awesome</p>
                    <p>bower install font-awesome-animation</p>
                    <summary><a href="http://www.dropzonejs.com/" target="_blank">
                                <img src="/img/logos/dropzone.svg"
                                     alt="Dropzone" width="120px"></a>
                        - is an open source library that provides drag’n’drop file uploads with image previews.
                    </summary>
                    <p>bower search dropzone</p>
                    <p>bower install dropzone --help</p>
                    <p>bower install dropzone --save</p>
                    <summary>
                        <a href="http://vuejs.org/" target="_blank">
                            <img src="/img/logos/vue.png" alt="Vue" width="35px"></a>
                                   Vue Javascript framework. Reactive Components for Modern Web Interfaces</summary>
                    <p>bower search vue</p>
                    <p>bower install vue --save</p>
                    <summary>
                        <a href="http://www.openssh.com/" target="_blank">
                            <img src="/img/docs/openssh.gif" alt="SSH" width="110px">
                            Install Open SSH
                        </a>
                    </summary>
                    <p>sudo apt-get install openssh-server</p>
                </div>
            </div>
            <div class="panel-footer">
                <p>Links</p>
                <a href="http://vuejs.org/">Vue</a> <br>
                <a href="https://github.com/vuejs/vue">Vue on github</a>

            </div> 
        </div> {{-- docs-panel - Command Line installations and configurations --}}
    
@stop

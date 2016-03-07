<!--suppress HtmlUnknownTarget -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img class="logo" src="/img/logo.png"
                                                  alt="Labour Bill | Home" title="Labour Bill | Home"></a>
        </div>
        <div class="nav navbar-nav">
            Fast and Easy Billing System
        </div>

        <div id="navbar" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="/docs" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-haspopup="true" aria-expanded="false">
                        Documentation
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/docs">Docs page</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/docs/sass">Sass</a></li>
                        <li><a href="/docs/artisan_commands">Artisan commands</a></li>

                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Laravel Installation</li>
                        <li><a href="/docs/sqlite">SQLite</a></li>
                        <li><a href="/docs/phpdoc">PHP Documentor</a></li>
                        <li><a href="/phpdocs">View Generated phpDocumentor</a></li>

                        <li role="separator" class="divider"></li>
                        <li><a href="/docs/laravelkb">Laravel Knowledge Base</a></li>

                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Linux and Web Server configurations</li>
                        <li><a href="/docs/nginx_deployment">nginx Deployment</a></li>
                        <li><a href="/docs/command_line"
                               title="Commands used on this site, for all web related installations"
                               name="Commands used on this site, for all web related installations">
                                Command Line Instructions (CLI)</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                                    <a href="/flyer" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        Flyers
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/flyers">Flyers main page</a></li>
                                        <li><a href="/flyers/create">Create a Flyer</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Other links</li>
                                        <li><a href="#">wip</a></li>
                                        <li><a href="#">wip</a></li>
                                    </ul>
                                </li>
                <!-- /.dropdown -->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-haspopup="true" aria-expanded="false">
                        Features
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Time Sheets</a></li>
                        <li><a href="#">Billing</a></li>
                        <li><a href="#">Invoicing</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Receive Money</li>
                        <li><a href="#">Credit Card</a></li>
                        <li><a href="#">Cash</a></li>
                    </ul>
                </li>
                <li><a href="#">Pricing</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse Features menu-->
    </div>
</nav>

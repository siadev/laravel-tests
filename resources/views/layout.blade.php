<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>labourbill.com.au | {{ $page_title }}</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
</head>
<body>

<div class="top-wrapper">

    <div class="topbar">
        <div class="topbar-content">
            Easiest Way to a Standout Slogan. We are the champions.
        </div>
    </div>


    <nav class="navbar navbar-default">
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
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
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
                    <li><a href="#">Login</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            </div>
    </nav>

    @yield('top-content')
</div>

<div class="container">
    @yield('content')
</div>

<div class="footer-nav">
    <p>Links for footer</p>
</div>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--<script src="/all.js"></script>--}}
</body>
</html>
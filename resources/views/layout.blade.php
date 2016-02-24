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

    @include('partials.flash')

<div class="top-wrapper">
    <div class="topbar">
        <div class="topbar-content">
            Easiest Way to a Standout Slogan. We are the champions.
        </div>
    </div>
    @include('partials.nav')


</div>

    @yield('home-page')

<div class="main-content">
    @yield('top-content')
    @yield('content')
</div>

<div class="footer-nav navbar-inverse">

    <div class="row">
        <div class="col-md-1">About</div>
        <div class="col-md-1">Terms</div>
        <div class="col-md-1">Privacy</div>
        <div class="col-md-2">Home</div>
        <div class="col-md-7">
            <p>There are several tests and more will be added as time goes by for this intranet website.</p>
            <p>These tests, addons, custom routines will be documented on this website in the documentation section.</p>
            <p>If you don't see it thats because I haven't created it yet, but I do intend to :)</p>
            <p>I will also create a forum as part of my training routine as well as a useful debate area
               for beta testers.</p>
        </div>
    </div>


</div>

@yield('scripts')
</body>
</html>
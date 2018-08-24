<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Creview') }}</title>

    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Creview') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    @if (!Auth::guest())
                    <form class="navbar-form pull-left" action="/search/" method="get">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group" style="max-width:470px;">
                            <input class="form-control" placeholder="Search" name="query" id="srch-term" type="text">
                            <div class="input-group-btn">
                            <button class="btn btn-default btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                            <li><a href="{{ url('/') }}"><i class="glyphicon glyphicon-home"></i></a></li>
                            <li class="">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-bell"></i></a>
                                <ul class="dropdown-menu">
                                <li><a href="#"><span class="badge pull-right">40</span>Link</a></li>
                                <li><a href="#"><span class="badge pull-right">2</span>Link</a></li>
                                <li><a href="#"><span class="badge pull-right">0</span>Link</a></li>
                                <li><a href="#"><span class="label label-info pull-right">1</span>Link</a></li>
                                <li><a href="#"><span class="badge pull-right">13</span>Link</a></li>
                                </ul>
                            </li>
                            <li><a class="" href="#" id="btnToggle"><i class="glyphicon glyphicon-th-large"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    <!-- {{ Auth::user()->name }} --> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url(Auth::user()->username) }}">Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>

    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<p class="text-center"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></p>',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>

</body>
</html>

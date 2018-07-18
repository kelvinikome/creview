<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <form class="nav-search-box navbar-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span><img src="{{ asset('img/search.png') }}" class="search-icon"></span>
                            </div>
                            <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                        </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


<div class="main-container">
    <div class="row py-4">
        <div class="col-sm-12">

            <div class="card page-header-card">
                <div class="">
                    <div class="">
                        <img alt="" src="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/2609645/580/406/m1/fpnw/wm0/preview2-.jpg?1493335474&s=19593770943022c83b727874da8bd328" class="page-avatar">
                        <div class="page-title"><strong>{{ $data['page']->title }}</strong></div>
                    </div>

                    <div class="page-header-button-group">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary btn-sm" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <div class="hidden-xs">Home</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default btn-sm" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <div class="hidden-xs">menu</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default btn-sm" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <div class="hidden-xs">menu</div>
                            </button>
                        </div>
                    </div>
                </div>

                    <div class="well">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                    <h3>This is tab 1</h3>
                    </div>
                    <div class="tab-pane fade in" id="tab2">
                    <h3>This is tab 2</h3>
                    </div>
                    <div class="tab-pane fade in" id="tab3">
                    <h3>This is tab 3</h3>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-2 padding-top">
            <ul class="list-group">
                <li class="list-group-item"><a href="/{{ $data['page']->id }}">Home</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->id }}/post">Posts</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->id }}/showcase">Showcase</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->id }}/about">About</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->id }}/contact">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-7 padding-top">
            @yield('content')
        </div>
        <div class="col-md-3 padding-top">
            <div class="card">
                <div class="card-header">About</div>
                <div class="card-body">
                    {{ $data['page']->about }}
                    <hr>
                </div>
            </div>
        </div>
        
    </div>
</div>






    </div>
</body>
</html>

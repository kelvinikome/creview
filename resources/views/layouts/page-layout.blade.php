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
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

        <div class="navbar navbar-fixed-top header">
 	<div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
            </a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
          <i class="glyphicon glyphicon-search"></i>
          </button>
      
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse1">
          <form class="navbar-form pull-left">
              <div class="input-group" style="max-width:470px;">
                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                <div class="input-group-btn">
                  <button class="btn btn-default btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @else
             <li><a href="{{ url('/home') }}"><i class="glyphicon glyphicon-home"></i></a></li>
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
</div>
    <div id="app">
<div class="page">
    <div class="">
        <section class="header">
            <div class="container">
                <span class="title">{{ $data['page']->title }}</span><br>
                <span class="tagline">{{ $data['page']->about }}</span>
            </div>
        </section>
        <div class="col-md-2 padding-top">
            <ul class="list-group">
                <li class="list-group-item"><a href="/{{ $data['page']->id }}">Home</a></li>
                <!-- <li class="list-group-item"><a href="/{{ $data['page']->id }}/post">Posts</a></li> -->
                <li class="list-group-item"><a href="/{{ $data['page']->id }}/showcase">Showcase</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->id }}/about">About</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->id }}/contact">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-7 padding-top">
            @yield('content')
        </div>
        <div class="col-md-3 padding-top">
            <div class="panel panel-default">
                <div class="panel-header text-center">About</div>
                <div class="panel-body">
                    {{ $data['page']->about }}
                </div>
            </div>
        </div>
        
    </div>
</div>






    </div>
</body>
</html>

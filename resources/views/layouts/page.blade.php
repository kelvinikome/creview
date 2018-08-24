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
        <div class="" style="background-size:cover;background-color:black;height:300px;background-image:url('https://ak7.picdn.net/shutterstock/videos/2766287/thumb/1.jpg')">
            khjh
        </div>
        <div class="" style="position:relative; top:-100px">
            <div class="col-md-3 col-md-offset-1">
                <div class="row profile">
                    
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="https://seeklogo.com/images/A/abstract-company-logo-A6C9D1F13F-seeklogo.com.png" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                {{ $data['page']->title }}
                            </div>
                            <div class="profile-usertitle-job">
                                {{ $data['page']->tagline }}
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm">Follow</button>
                            <button type="button" class="btn btn-danger btn-sm">Message</button>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="/{{ $data['page']->uri }}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Home </a>
                                </li>
                                <li>
                                    <a href="/{{ $data['page']->uri }}/post">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Posts </a>
                                </li>
                                <li>
                                    <a href="/{{ $data['page']->uri }}/about" target="_blank">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    About </a>
                                </li>
                                <li>
                                    <a href="/{{ $data['page']->uri }}/contact">
                                    <i class="glyphicon glyphicon-phone"></i>
                                    Contact </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                @yield('content')
            </div>
            <div class="col-md-2">
                <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPost">
                    new post
                </button>
                </div>
            </div>
        </div>
    </div>



<!-- new post -->
<div class="modal fade" id="newPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/{{ $data['page']->uri }}/post" method="post">
            <input type="hidden" name="page_id" value="{{ $data['page']->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="uri" value="{{ $data['page']->uri }}">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="content" placeholder="Enter a description" rows="3"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
        </form>
    </div>
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

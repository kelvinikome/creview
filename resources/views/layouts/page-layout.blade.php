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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
          <form class="navbar-form pull-left" action="/search" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="input-group" style="max-width:470px;">
                <input class="form-control" placeholder="Search" name="query" id="srch-term" type="text">
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



  <header class="header">
    <div class="container">
      <div class="teacher-name" style="padding-top:20px;">

        <div class="row" style="margin-top:0px;">
        <div class="col-md-9">
          <h2><strong><span class="title">{{ $data['page']->title }}</span><br></strong></h2>
        </div>
        <div class="col-md-3">
          <div class="button" style="float:right;">
            <a href="#" class="btn btn-outline-success btn-sm">Page Settings</a>
          </div>
        </div>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-3"> <!-- Image -->
          <a href="#"> <img class="rounded-circle" src="data:image/jpeg;base64,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" alt="" style="width:200px;height:200px"></a>
        </div>

        <div class="col-md-6"> <!-- Rank & Qualifications -->
          <h5><span class="tagline">{{ $data['page']->tagline }}</span></h5>
          <p>PhD (On study at BUET), M.Sc. in research on ICT(UPC, Spain), M.Sc. in research on ICT(UCL, Belgium).</p>
          <p>Address: Namapara, Trishal, Mymensingh</p>
        </div>

        <div class="col-md-3 text-center"> <!-- Phone & Social -->
          <span class="number" style="font-size:18px">Phone:<strong>+8801732226402</strong></span>
          <div class="button" style="padding-top:18px">
            <a href="mailto:ahmkctg@yahoo.com" class="btn btn-outline-success btn-block">Send Email</a>
          </div>
          <div class="social-icons" style="padding-top:18px">
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x" style="color:#3AAA64"></i>
              <i class="fa fa-slideshare fa-stack-1x fa-inverse"></i>
            </span></a>

          </div>
        </div>
      </div>
    </div>
  </header>















    <div class="">
        <div class="col-md-2 padding-top">
            <ul class="list-group">
                <li class="list-group-item"><a href="/{{ $data['page']->uri }}">Home</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->uri }}/post">Posts</a></li>
                <!-- <li class="list-group-item"><a href="/{{ $data['page']->id }}/showcase">Showcase</a></li> -->
                <li class="list-group-item"><a href="/{{ $data['page']->uri }}/about">About</a></li>
                <li class="list-group-item"><a href="/{{ $data['page']->uri }}/contact">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-7 padding-top">
            @yield('content')
        </div>
        <div class="col-md-3 padding-top">

			<div class="">
				<div class="rating-block">
					<h4>Average rating</h4>
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				</div>
			</div>
            <?php 
            
            
             if ($admin)
            echo '
            <div class="panel panel-default">
                <div class="panel-heading text-center"></div>
                <div class="panel-body">
                    <div class="row text-center">
                        <div class="">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPost">
                                new post
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">
                                Edit page
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">
                                Page settings
                            </button>                     
                        </div>
                    </div>
                </div>
            </div>';
            ?>
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


    </div>
</body>
<script>
    	jQuery(document).ready(function($){
	    
        $(".btnrating").on('click',(function(e) {
        
        var previous_value = $("#selected_rating").val();
        
        var selected_value = $(this).attr("data-attr");
        $("#selected_rating").val(selected_value);
        
        $(".selected-rating").empty();
        $(".selected-rating").html(selected_value);
        
        for (i = 1; i <= selected_value; ++i) {
        $("#rating-star-"+i).toggleClass('btn-warning');
        $("#rating-star-"+i).toggleClass('btn-default');
        }
        
        for (ix = 1; ix <= previous_value; ++ix) {
        $("#rating-star-"+ix).toggleClass('btn-warning');
        $("#rating-star-"+ix).toggleClass('btn-default');
        }
        
        }));
        
            
    });
</script>    
</html>

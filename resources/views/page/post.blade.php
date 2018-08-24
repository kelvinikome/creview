
@extends('layouts.page')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="">
    <div class="col-md-12">
        <div class="">
            <div class="social-feed-box">
                <div class="pull-right social-action dropdown">
                <form class="pull-right" action="/{{$data['page']->uri}}/post/{{$data['post']->uri}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="DELETE" >
                    <input class="btn btn-sm" type="submit" value="delete " >
                </form>
                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle btn-white">
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu m-t-xs">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
                <div class="social-avatar">
                    <a href="/{{$data['page']->uri}}/post/{{$data['post']->uri}}">
                        <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        {{ $data['post']->title }}
                    </a>
                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                </div>
                <div class="social-body">
                    {{{ $data['post']->content }}}
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive">
                    <div class="btn-group">
                        <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                        <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                        <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                    </div>
                </div>
                <div class="social-footer">
                    <div class="social-comment">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar2.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                            <br>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                            <small class="text-muted">12.06.2014</small>
                        </div>
                    </div>

                    <div class="social-comment">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            Making this the first true generator on the Internet. It uses a dictionary of.
                            <br>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                            <small class="text-muted">10.07.2014</small>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Andrew Williams
                                </a>
                                Making this the first true generator on the Internet. It uses a dictionary of.
                                <br>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                <small class="text-muted">10.07.2014</small>
                            </div>
                        </div>
                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar3.png">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="social-comment">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                            <br>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                            <small class="text-muted">12.06.2014</small>
                        </div>
                    </div>

                    <div class="social-comment">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                            <br>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                            <small class="text-muted">12.06.2014</small>
                        </div>
                    </div>

                    <div class="social-comment">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                        </a>
                        <div class="media-body">
                            <textarea class="form-control" placeholder="Write comment..."></textarea>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
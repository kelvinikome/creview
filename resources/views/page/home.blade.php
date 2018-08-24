@extends('layouts.page')

@section('content')

  @foreach($data['posts'] as $post)



            <div class="social-feed-box">
                <div class="pull-right social-action dropdown">
                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle btn-white">
                        <i class="fa fa-angle-down">options</i>
                    </button>
                    <ul class="dropdown-menu m-t-xs">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
                <div class="social-avatar">
                    <a href="/{{$data['page']->uri}}/post/{{$post->uri}}">
                        <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        {{ $post->title }}
                    </a>
                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                </div>
                <div class="social-body">
                    {{{ $post->content }}}
                    <div class="btn-group">
                        <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                        <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                        <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                    </div>
                </div>

            </div>
  @endforeach

@endsection


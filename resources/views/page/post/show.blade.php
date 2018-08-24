@extends('layouts.page-layout')

@section('content')
<?php 
    $admin = false;
    if ($data['user'])
        if ($data['page']->author_id == $data['user']->id){
            $admin = true;
        }
?>



        <div class="panel panel-default">
            <div class="panel-body">
               <section class="post-heading">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="40" height="40" alt="...">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="<?php echo '/'.$data['page']->uri.'/post/'.$data['post']->uri; ?>" class="anchor-username"><h4 class="media-heading">{{ $data['post']->title }}</h4></a> 
                                <a href="#" class="anchor-time">51 mins</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-md-1">
                                
                    <?php

if ($admin)
echo '                            
    <form class="pull-right" action="/'.$data['page']->uri.'/post/'.$data['post']->uri.'" method="post">
        <input type="hidden" name="_token" value="'.csrf_token().'">
        <input type="hidden" name="_method" value="DELETE" >
        <input class="btn btn-sm" type="submit" value="delete " >
    </form>
    ';
?>
                         </div>
                    </div>             
               </section>
               <section class="post-body">
                    <p>{{ $data['post']->content }}</p>
               </section>
               <section class="post-footer">
                   <hr>
                   <div class="post-footer-option">
                        <ul class="row list-unstyled">
                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                            <li>
                                <div class="post-rating-container">
                                    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="1" id="rating-star-1">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="2" id="rating-star-2">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="3" id="rating-star-3">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="4" id="rating-star-4">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnrating btn btn-default btn-sm" data-attr="5" id="rating-star-5">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </li>
                            <li>                                
                                <form action="/{{ $data['page']->uri }}/post/{{ $data['post']->uri }}/comment" method="post">
                                    <div class="input-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="page_id" value="{{ $data['page']->id }}">
                                        <input type="hidden" name="post_id" value="{{ $data['post']->id }}">
                                        <input class="form-control" placeholder="Add a comment.." type="text" name="content">
                                        <div class="input-group-btn">
                                            <button class="btn">Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                   </div>
                   <div class="post-footer-comment-wrapper">
                       <div class="comment-form">
                           
                       </div>
                       <div class="comment">
                           <label>Comments</label>

<?php

    foreach ($data['comments'] as $comment){
        echo '
        
            <div class="media">
                <div class="media-left">
                <a href="#">
                    <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="32" height="32" alt="...">
                </a>
                </div>
                <div class="media-body">
                <a href="#" class="anchor-username"><h4 class="media-heading">'.$comment->content.'</h4></a> 
                ';
                if ($admin)
echo '                            
    <form class="pull-right" action="/'.$data['page']->uri.'/post/'.$data['post']->uri.'/comment/'.$comment->id.'" method="post">
        <input type="hidden" name="_token" value="'.csrf_token().'">
        <input type="hidden" name="_method" value="DELETE" >
        <input class="btn btn-sm" type="submit" value="delete " >
    </form>
    ';

                echo '
                <a href="#" class="anchor-time">51 mins</a>
                </div>
            </div>
        ';
    }
?>
                       </div>
                   </div>
               </section>
            </div>
        </div>











@endsection

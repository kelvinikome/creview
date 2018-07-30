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
                                <a href="#" class="anchor-username"><h4 class="media-heading">{{ $data['post']->title }}</h4></a> 
                                <a href="#" class="anchor-time">51 mins</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-md-1">
                                
                    <?php

if ($admin)
echo '                            
    <form class="pull-right" action="/'.$data['page']->id.'/post/'.$data['post']->id.'" method="post">
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
                                <form action="/{{ $data['page']->id }}/post/{{ $data['post']->id }}/comment" method="post">
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
    <form class="pull-right" action="/'.$data['page']->id.'/post/'.$data['post']->id.'/comment/'.$comment->id.'" method="post">
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
        <form action="/post" method="post">
            <input type="hidden" name="page_id" value="{{ $data['page']->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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


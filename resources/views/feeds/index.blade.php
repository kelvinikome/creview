@extends('layouts.app')

@section('content')


        <div class="padding-top"></div>
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
                                <a href="sassds" class="anchor-username"><h4 class="media-heading">title</h4></a> 
                                <a href="#" class="anchor-time">51 mins</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-md-1">
                                
                         </div>
                    </div>             
               </section>
               <section class="post-body">
                    <p>jdhfkldj flsj fksd jfkj sdpo fjsdoif jsdkf jsdj fskd fjsdijf isdjfls fi jd</p>
               </section>
               <section class="post-footer">
                   <hr>
                   <div class="post-footer-option">
                        <ul class="row list-unstyled">
                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                            <li>                                
                                <form action="" method="post">
                                    <div class="input-group">
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

            <div class="media">
                <div class="media-left">
                <a href="#">
                    <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="32" height="32" alt="...">
                </a>
                </div>
                <div class="media-body">
                <a href="#" class="anchor-username"><h4 class="media-heading">'.$comment->content.'</h4></a> 
                
                <a href="#" class="anchor-time">51 mins</a>
                </div>
            </div>
            
                       </div>
                   </div>
               </section>
            </div>
        </div>


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
                                <a href="sassds" class="anchor-username"><h4 class="media-heading">title</h4></a> 
                                <a href="#" class="anchor-time">51 mins</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-md-1">
                                
                         </div>
                    </div>             
               </section>
               <section class="post-body">
                    <p>jdhfkldj flsj fksd jfkj sdpo fjsdoif jsdkf jsdj fskd fjsdijf isdjfls fi jd</p>
               </section>
               <section class="post-footer">
                   <hr>
                   <div class="post-footer-option">
                        <ul class="row list-unstyled">
                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                            <li>                                
                                <form action="" method="post">
                                    <div class="input-group">
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

            <div class="media">
                <div class="media-left">
                <a href="#">
                    <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="32" height="32" alt="...">
                </a>
                </div>
                <div class="media-body">
                <a href="#" class="anchor-username"><h4 class="media-heading">'.$comment->content.'</h4></a> 
                
                <a href="#" class="anchor-time">51 mins</a>
                </div>
            </div>
            
                       </div>
                   </div>
               </section>
            </div>
        </div>











@endsection

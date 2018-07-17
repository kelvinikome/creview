@extends('layouts.app')

@section('content')
<?php 
    $admin = false;
    if ($data['page']->author_id == $data['user']->id){
        $admin = true;
    }
?>
<div class="main-container">
    <div class="row">
        <div class="col-sm-12">

<style>

</style>
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
                <li class="list-group-item"><a href="{{ $data['page']->id }}">Home</a></li>
                <li class="list-group-item"><a href="{{ $data['page']->id }}/product">Products</a></li>
                <li class="list-group-item"><a href="{{ $data['page']->id }}/service">Services</a></li>
                <li class="list-group-item"><a href="{{ $data['page']->id }}/about">About</a></li>
                <li class="list-group-item"><a href="{{ $data['page']->id }}/contact">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-7 padding-top">
                <div class="row justify-content-center">
                    <div class="">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newService">
                            add service
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPost">
                            new post
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newProduct">
                            add product
                        </button>                        
                    </div>
                </div>
                <div class="padding-top"></div>
            <?php 

foreach ( $data['posts'] as $post){
    echo '
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="assets/img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px" width="28px">
                    <a href="#" class="pull-right">:';
                    
    if ($admin)
        echo '
                    <form method="POST" action="/post/'.$post->id.'" accept-charset="UTF-8">
                        <input name="_token" type="hidden" value="gPwyFWsCoOjwB1hDLdkHpSftF2EtAbKmPGVt3sff">
                        <input name="_method" type="hidden" value="DELETE">
                        <input class="btn btn-sm" type="submit" value="Delete">
                    </form>';
                    
    echo '
                    </a> <h4>'.$post->title.'</h4>
                </div>
                <div class="panel-body">
                    <div class="clearfix"></div>
                    <hr>
                    
                    <p>'.$post->content.'</p>
                    
                    <hr>
                    <form>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                            </div>
                            <input class="form-control" placeholder="Add a comment.." type="text">
                        </div>
                    </form>
                                
                </div>
            </div>
        </div>
    </div>';
}

            ?>
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


@extends('layouts.page-layout')

@section('content')
<?php 
    $admin = false;
    if ($data['user'])
        if ($data['page']->author_id == $data['user']->id){
            $admin = true;
        }
?>
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="pull-right">:';
                    
                    </a> <h4>{{ $data['page']->title }}</h4>
                </div>
                <div class="panel-body">
                    <div class="clearfix"></div>
                    
                    <p>{{ $data['page']->about }}</p>
                    
                                
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


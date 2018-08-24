@extends('layouts.app')

@section('content')
    <div class="">
        <div class="col-md-12 panel panel-default">
          <div class="panel-heading">
              <a href="/pages/create" class="pull-right">
                <button class="btn btn-sm btn-primary">Create page</button>
             </a> 
             <h4>My Pages</h4>
          </div>
   		  <div class="panel-body">
              <div class="list-group">
                
                        <?php 
                            foreach ($pages as $page){
                                echo '<div class="list-group-item"><a href="/'.$page->uri.'">'.$page->title.'</a>
                                
                                                  
                                        <form class="pull-right" action="/pages/'.$page->id.'" method="post">
                                            <input type="hidden" name="_token" value="'.csrf_token().'">
                                            <input type="hidden" name="_method" value="DELETE" >
                                            <input class="btn btn-sm" type="submit" value="delete " >
                                        </form>
                                      </div>';
                            }
                        ?>
              </div>
            </div>
   		</div>
    </div>
@endsection

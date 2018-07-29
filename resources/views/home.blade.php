@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
              <a href="/home/page/create" class="pull-right">
                <button>Create page</button>
             </a> 
             <h4>My Pages</h4>
          </div>
   		  <div class="panel-body">
              <div class="list-group">
                
                        <?php 
                            foreach ($pages as $page){
                                echo '<div class="list-group-item"><a href="/'.$page->id.'">'.$page->title.'</a>
                                
                                                  
                                        <form class="pull-right" action="/home/page/'.$page->id.'" method="post">
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
    </div>
</div>
@endsection

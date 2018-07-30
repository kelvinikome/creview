@extends('layouts.page-layout')

@section('content')
<?php 
    $admin = false;
    if ($data['user'])
        if ($data['page']->author_id == $data['user']->id){
            $admin = true;
        }
?>
            <?php 
           
foreach ( $data['posts'] as $post){
    echo '
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/'.$data['page']->id.'/post/'.$post->id.'">';
                    
    if ($admin)
    echo '                            
        <form class="pull-right" action="/'.$data['page']->id.'/post/'.$post->id.'" method="post">
            <input type="hidden" name="_token" value="'.csrf_token().'">
            <input type="hidden" name="_method" value="DELETE" >
            <input class="btn btn-sm" type="submit" value="delete " >
        </form>
        ';
                    
    echo '
                    <h4>'.$post->title.'</h4>
                    </a>
                </div>
                <div class="panel-body">
                    <div class="clearfix"></div>
                    
                    <p>'.$post->content.'</p>
                    
                                
                </div>
            </div>
        </div>
    </div>';
}

            ?>











@endsection


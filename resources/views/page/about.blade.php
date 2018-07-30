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
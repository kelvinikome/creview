@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/home/page/create">
                        <button>Create page</button>
                    </a>

                    Pages
                    <ul>
                        <?php 
                            foreach ($pages as $page){
                                echo '<li><a href="/'.$page->id.'">'.$page->title.'
                                
                                                  
                                        <form action="/home/page/'.$page->id.'" method="post">
                                            <input type="hidden" name="_token" value="'.csrf_token().'">
                                            <input type="hidden" name="_method" value="DELETE" >
                                            <input class="btn btn-sm" type="submit" value="delete " >
                                        </form>
                                
                                
                                </li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

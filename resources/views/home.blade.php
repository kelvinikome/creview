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

                    <a href="/page/create">
                        <button>Create page</button>
                    </a>

                    Pages
                    <ul>
                        <?php 
                            foreach ($pages as $page){
                                echo '<li><a href="/'.$page->id.'">'.$page->title.'</li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

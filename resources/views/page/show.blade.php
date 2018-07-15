@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">

<style>

</style>
            <div class="card page-header-card">
                <div class="">
                    <div class="">
                        <img alt="" src="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/2609645/580/406/m1/fpnw/wm0/preview2-.jpg?1493335474&s=19593770943022c83b727874da8bd328" class="page-avatar">
                        <div class="page-title"><strong>{{ $page->title }}</strong></div>
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
        <div class="col-md-9 padding-top">
            <div class="card">
                <div class="card-body">
                    {{ $page->about }}
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-3 padding-top">
            <div class="card">
                <div class="card-header">About</div>
                <div class="card-body">
                    {{ $page->about }}
                    <hr>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

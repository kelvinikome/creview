@extends('layouts.app')

@section('content')
<script>
     delete(){
        console.log("works");
    }
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data['page']->title }}</div>


                                        <!-- {{!!Form::open(['action' => ['ServiceController@destroy', '13'], 'method' => 'POST']) !!}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class', 'btn'])}}
                                        {{!!Form::close() }} -->
                <div class="card-body">
                    {{ $data['page']->about }}
                    <hr>
                    <div class="">
                    <div class="row">

                        <?php 
                            foreach ( $data['services'] as $service){
                                echo '<div class="col-sm-4 card">
                                    <div class="card-header">'
                                        .$service->name;
                                 echo ' 
                                 <a href="/service/'.$service->id.'" class="btn btn-primary">
                                     edit
                                 </a>     
                                    </div>
                                    <div class="card-body">'. $service->about .'</div>
                                    </div>';
                            }
                        ?>
                    </div>
                    </div>
                    <hr>
                    <div class="">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newService">
                            add service
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newProduct">
                            add product
                        </button>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="newService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/service" method="post">
            <input type="hidden" name="page_id" value="{{ $data['page']->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>About</label>
                <textarea class="form-control" name="about" placeholder="Enter a description" rows="3"></textarea>
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

<!-- Edit service -->
<div class="modal fade" id="editService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                                        {{!!Form::open(['action' => ['ServiceController@destroy', '13'], 'method' => 'POST']) !!}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class', 'btn'])}}
                                        {{!!Form::close() }} 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/service" method="post">
            <input type="hidden" name="page_id" value="{{ $data['page']->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>About</label>
                <textarea class="form-control" name="about" placeholder="Enter a description" rows="3"></textarea>
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
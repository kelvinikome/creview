@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data->name }}</div>

                <div class="card-body">
                    
                    <!-- Edit service -->
                    <div class="">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                                                            {{!!Form::open(['action' => ['ServiceController@destroy', $data->id], 'method' => 'POST']) !!}}
                                                                {{Form::hidden('_method', 'DELETE')}}
                                                                {{Form::submit('Delete', ['class', 'btn'])}}
                                                            {{!!Form::close() }} 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/service" method="post">
                                <input type="hidden" name="page_id" value="">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

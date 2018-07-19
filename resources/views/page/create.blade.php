@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Page</div>

                <div class="card-body">
                    
                    <form action="/home/page" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="author_id" value="{{ $user_id }}">
                        <div class="form-group">
                            <label for="">Page name</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="form-control" name="category">
                                <option></option>
                                <option>Business</option>
                                <option>Entertainment</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea class="form-control" placeholder="Tell us what your page is about..." name="about" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Create page">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

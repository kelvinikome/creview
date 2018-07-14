@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Page</div>

                <div class="card-body">
                    
                    <form>
                        <div class="form-group">
                            <label for="">Page name</label>
                            <input type="email" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="form-control" id="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea class="form-control" placeholder="Tell us what your page is about..." id="" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Create page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

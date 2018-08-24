@extends('layouts.full-width')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('partials.profile')
            </div>
            <div class="col-md-6">
                @include('partials.posts')
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
@endsection

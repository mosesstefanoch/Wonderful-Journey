@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <img src="{{$articles->image}}" class="img-responsive" alt="Image">
                <div class="card-body">
                    <h5 class="card-title">{{$articles->title}}</h5>
                    <p class="card-text">{{$articles->description}}</p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection

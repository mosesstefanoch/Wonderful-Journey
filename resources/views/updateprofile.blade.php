@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="{{ route('updateprofile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name :</label>
                    <input type="name" class="form-control" name="name" value="" id="formGroupExampleInput" placeholder="New Name" autofocus>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" value="" id="formGroupExampleInput" placeholder="New Email" autofocus>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone :</label>
                    <input type="phone" class="form-control" name="phone" value="" id="formGroupExampleInput" placeholder="New Phone" autofocus>
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
        

@endsection
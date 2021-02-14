@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3>
                WELCOME BACK, {{ Auth::user()->name }}
            </h3>
            <table class="table table-striped mt-4 mb-4">
                <tbody>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">{{ Auth::user()->email }}</th>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <th scope="row">{{ Auth::user()->phone }}</th>
                    </tr>
                </tbody>
            </table>
            <a href="/updateprofile" class="btn btn-primary mb-4" tabindex="-1" role="button" aria-disabled="true">Update Profile</a>
        </div>    
    </div>
</div>

@endsection
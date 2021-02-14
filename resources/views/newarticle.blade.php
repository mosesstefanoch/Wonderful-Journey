@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="{{ route('postarticle') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title :</label>
                    <input type="title" class="form-control" name="title" value="" id="formGroupExampleInput" placeholder="Enter Title" autofocus>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category :</label>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Photo :</label>
                    <div class="input-group">
                        <input id="image" name="image" type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Story :</label>
                    <textarea class="form-control" id="description" name="description" type="description" rows="6"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
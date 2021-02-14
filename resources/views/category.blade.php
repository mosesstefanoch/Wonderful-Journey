@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-columns">
                @foreach ($articles as $article)
                <div class="card card border-info mb-3">
                    <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ Str::limit($article->description,100) }}
                        <a href="/article/{{ $article->id }}">full story</a>
                    </p>
                        <p class="card-text"><small class="text-muted">{{ $article->category->name }}</small></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
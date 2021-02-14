@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <a href="/newarticle" class="btn btn-primary mb-4" tabindex="-1" role="button" aria-disabled="true">+ Create Blog</a>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->title}}</th>
                    <td>
                        <form method="POST" action="{{ route('user.delArticle', [$article->id]) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Delete article">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
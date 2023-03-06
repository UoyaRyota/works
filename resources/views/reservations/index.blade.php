@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    list
                </div>
                @foreach ($posts as $post)
                <div class="card-body">
                    <h5 class="card-title">title:{{ $post->title }}</h5>
                    <p class="card-text">content:{{ $post->body }}</p>
                    <a href="#" class="btn btn-primary">detail</a>
                </div>
                <div class="card-footer text-muted">
                    created_at:{{ $post->created_at }}
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">create</a>
        </div>
    </div>
</div>
@endsection
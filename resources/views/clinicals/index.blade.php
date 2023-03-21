@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    list
                </div>
                @foreach ($clinicals as $clinical)
                <div class="card-body">
                    <h5 class="card-title">名前：{{ $clinical->name }}</h5>
                    <p class="card-text">年齢：{{ $clinical->age }}歳</p>
                    <a href="{{ route('clinicals.show', $clinical->id) }}" class="btn btn-primary">detail</a>
                </div>
                <div class="card-footer text-muted">
                    投稿日時：{{ $clinical->created_at }}
                </div>
                @endforeach
            </div>
        </div>

        <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
            <a href="{{ route('clinicals.create') }}" class="btn btn-primary">
                <button class="btn btn-primary" type="button">新規作成</button>
            </a>
        </div>

    </div>
</div>
@endsection
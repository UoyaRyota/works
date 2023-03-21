@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h5>名前：{{$user->name}}</h5>
            </div>
            <div class="card-header">
              <img src="{{ $user->image_path }}" alt="画像">
            </div>
                <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">
                        <button class="btn btn-primary" type="button">編集</button>
                    </a>
                </div>
        </div>
    </div>
</div>
@endsection
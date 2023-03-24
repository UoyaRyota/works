@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-10 mt-6 user_main">

            @if($user->image_path == '')
            <div class="user_image">
                <img src="resources/img/no-image.png" alt="画像">
            </div>
            @else
            <div class="user_image">
                <img src="{{ $user->image_path }}" alt="画像">
            </div>
            @endif

            <h2 class="text-center mt-3">{{$user->name}}</h2>
            <div>
                <h6 class="text-center">{{ $user->email }}</h6>
            </div>

        </div>

        <div class="d-grid gap-2 col-8 mx-auto my-4 ">
            <a href="{{route('users.edit', $user->id)}}" class="btn btn_primary">
                <button class="btn btn_primary" type="button">編集</button>
            </a>
        </div>

    </div>
</div>

@endsection
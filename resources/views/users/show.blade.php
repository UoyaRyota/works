@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-6 user-main basic">

        @if($user->image_path == '')
            <div class="user-image">
              <img src="/Applications/MAMP/htdocs/works/resources/no-image.png" alt="画像">
            </div>

        @else
            <div class="user-image">
              <img src="{{ $user->image_path }}" alt="画像">
            </div>
        @endif

            <h2 style="text-align: center;" class="mt-3">{{$user->name}}</h2>

            <div class="">
                <h6 style="text-align: center;">{{ $user->email }}</h6>
              
            </div>

        </div>

            <div class="d-grid gap-2 col-8 mx-auto my-4 ">
                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">
                    <button class="btn btn-primary" type="button">編集</button>
                </a>
            </div>
    </div>
</div>
@endsection
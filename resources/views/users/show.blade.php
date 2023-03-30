@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 mt-6 user_main">
            @if($user->image_path == '')
            <div class="user_image">
                <img src="{{ asset('no-image.png') }}" alt="画像">
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

        <x-button.link pageLink="{{route('users.edit', $user->id)}}" pageTitle="編集"/>

        <div class="mb-5">
            <a class="dropdown-item mb-5 text-center text-black-50" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <span class="border-bottom">{{ __('ログアウトする') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
</div>

@endsection
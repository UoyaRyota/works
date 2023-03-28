@extends('layouts.app')
@section('content')
<div class="row justify-content-center">

    <div class="col-12">
        @foreach ($clinical->kartes as $karte)
        <div class="mt-3">
            <p class="">投稿者：{{ $clinical->user->name }}</p>
            <div class="">
                <p class="card-title">投稿日時：{{ $karte->created_at }}</p>
                <p class="card-text">内容：{{ $karte->karte_body }}</p>
            </div>
        </div>

        <div class="d-grid gap-2 col-8 mx-auto my-5 ">
            <a href="{{ route('kartes.edit', $karte->id) }}" class="btn btn_primary mb-5">
                <button class="btn btn_primary" type="button">編集</button>
            </a>
        </div>

        @endforeach
    </div>
  @endsection
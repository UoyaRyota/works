@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h5>名前：{{ $reservation->user_name }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">日付：{{ $reservation->reservation_date }}</p>
                <p>投稿日時：{{ $reservation->created_at }}</p>
            </div>
        </div>

        <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-primary">
                <button class="btn btn-primary" type="button">編集</button>
            </a>
        </div>

    </div>
</div>
@endsection
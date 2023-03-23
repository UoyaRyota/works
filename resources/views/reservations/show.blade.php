@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 basic shadow-sm rounded">
        <div class="my-3"><h3 class="font-weight-bold">予約詳細画面</h3></div>
            <div class="card-body">
                <p>名前：{{ $reservation->user_name }}</p>
                <p class="card-text">日付：{{ $reservation->reservation_date }}</p>
                <p>日時：{{ $reservation->reservation_time }}</p>
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
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 shadow-sm rounded">
            <div class="card-body">
                <p>名前：{{ $reservation->user_name }}</p>
                <p class="card-text">日付：{{ $reservation->reservation_date }}</p>
                <p>日時：{{ $reservation->reservation_time }}</p>
            </div>
        </div>

        <div class="d-grid gap-2 col-8 mx-auto my-5 ">
            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn_primary mb-5">
                <button class="btn btn_primary" type="button">編集</button>
            </a>
        </div>

    </div>
</div>
@endsection
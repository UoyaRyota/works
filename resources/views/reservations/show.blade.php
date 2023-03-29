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

        <x-button.link pageLink="{{ route('reservations.edit', $reservation->id) }}" pageTitle="編集"/>

    </div>
</div>
@endsection
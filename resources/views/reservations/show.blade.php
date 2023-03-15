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
                <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-primary">edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
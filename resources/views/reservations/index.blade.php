@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    list
                </div>
                @foreach ($reservations as $reservation)
                <div class="card-body">
                    <h5 class="card-title">名前：{{ $reservation->user_name }}</h5>
                    <p class="card-text">日付：{{ $reservation->reservation_date }}</p>
                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-primary">detail</a>
                </div>
                <div class="card-footer text-muted">
                    投稿日時：{{ $reservation->created_at }}
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-2">
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">create</a>
        </div>
    </div>
</div>
@endsection
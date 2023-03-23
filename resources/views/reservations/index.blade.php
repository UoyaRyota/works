@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
        <div class="my-3"><h3 class="font-weight-bold">予約一覧</h3></div>
        <table class="Table">
                <thead class="Table-Head">
                    <tr class="Table-Head-Row">
                        <th class="Table-Head-Row-Cell table-left">日付</th>
                        <th class="Table-Head-Row-Cell">時間</th>
                        <th class="Table-Head-Row-Cell table-right">名前</th>
                    </tr>
                </thead>

                <tbody class="Table-Body">
                    @foreach ($reservations as $reservation)
                    <tr class="Table-Body-Row">
                    <a href="{{ route('reservations.show', $reservation->id) }}">

                            <td class="Table-Body-Row-Cell">
                                <a href="{{ route('reservations.show', $reservation->id) }}" class="widelink">{{ $reservation->reservation_date }}</a>
                            </td>

                            <td class="Table-Body-Row-Cell">
                                <a href="{{ route('reservations.show', $reservation->id) }}" class="widelink">{{ $reservation->reservation_time }}</a>
                            </td>

                            <td class="Table-Body-Row-Cell">
                                <a href="{{ route('reservations.show', $reservation->id) }}" class="widelink">{{ $reservation->user_name }}</a>
                            </td>
                    </a>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">
                <button class="btn btn-primary" type="button">新規作成</button>
            </a>
        </div>

    </div>
</div>
@endsection
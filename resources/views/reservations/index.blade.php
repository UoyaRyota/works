@extends('layouts.app')
<div class="position-fixed w-100 bg-white d-flex">
    <x-search searchRes="{{route('reservations.search')}}"/>
    <?php $user = Auth::user();?>
    <x-user-image/>
</div>


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 mt-5">

            <x-title title="予約一覧" />

            <table class="table">

                <thead class="table_head">
                    <tr class="table_head_row">
                        <th class="table_head_row_cell table_left">日付</th>
                        <th class="table_head_row_cell">時間</th>
                        <th class="table_head_row_cell table_right">名前</th>
                    </tr>
                </thead>

                <tbody class="table_body">
                    @foreach ($reservations as $reservation)
                    <tr class="table_body_row">
                        <a href="{{ route('reservations.show', $reservation->id) }}">

                            <td class="table_body_row_cell">
                                <a href="{{ route('reservations.show', $reservation->id) }}"
                                    class="widelink">{{ $reservation->reservation_date }}</a>
                            </td>

                            <td class="table_body_row_cell">
                                <a href="{{ route('reservations.show', $reservation->id) }}"
                                    class="widelink">{{ $reservation->reservation_time }}</a>
                            </td>

                            <td class="table_body_row_cell">
                                <a href="{{ route('reservations.show', $reservation->id) }}"
                                    class="widelink">{{ $reservation->user_name }}</a>
                            </td>
                        </a>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

        <x-button.link pageLink="{{ route('reservations.create') }}" pageTitle="新規作成"/>

    </div>
</div>

@endsection
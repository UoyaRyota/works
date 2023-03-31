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

        {{-- フラッシュメッセージ始まり --}}
        {{-- 成功の時 --}}
        @if (session('successMessage'))
        <div class="alert alert-success text-center">
            {{ session('successMessage') }}
        </div> 
        @endif
        {{-- 失敗の時 --}}
        @if (session('errorMessage'))
        <div class="alert alert-danger text-center">
            {{ session('errorMessage') }}
        </div> 
        @endif
        {{-- フラッシュメッセージ終わり --}}

            <x-title title="予約一覧" />
            

            <table class="table">
                <x-table.head tableTitle="日付" tableTitleSec="時間" tableTitleTh="名前" />
                <tbody class="table_body">
                    @foreach ($reservations as $reservation)
                    <x-table.content contentLink="{{ route('reservations.show', $reservation->id) }}" contentTitle="{{ $reservation->reservation_date }}" 
                    contentTitleSec="{{ $reservation->reservation_time }}" 
                    contentTitleTh="{{ $reservation->user_name }}"/>
                    <!-- <tr class="table_body_row">
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
                    </tr> -->
                    @endforeach
                </tbody>

            </table>

        </div>

        <x-button.link pageLink="{{ route('reservations.create') }}" pageTitle="新規作成"/>

    </div>
</div>

@endsection
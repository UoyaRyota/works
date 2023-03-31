@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 shadow-sm rounded">
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
            
            <div class="card-body">
                <p>名前：{{ $reservation->user_name }}</p>
                <p class="card-text">日付：{{ $reservation->reservation_date }}</p>
                <p>日時：{{ $reservation->reservation_time }}</p>
            </div>
            
        </div>

        <x-button.link pageLink="{{ route('reservations.edit', $reservation->id) }}" pageTitle="編集"/>

        <div class="col-10">
            <form action="{{ route('reservations.destroy', $reservation->id) }}" method='post' class="mb-5">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type='submit' value='削除' class="btn btn-danger w-100 mb-5" onclick='return confirm("削除しますか？？");'>
            </form>
        </div>


    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">

            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}

                <div class="form-group">
                    <label>日付</label>
                    <input type="date" class="form-control @if($errors->any()) validation_border @endif" placeholder=""
                        name="reservation_date" value="{{ $reservation->reservation_date}}">

                    @if ($errors->any())
                    <ul class="validation_message text-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                </div>

                <label>時間</label>
                <div class="form-group">

                    <input type="time" id="appt" class="w-50 h-100" name="reservation_time" min="09:00" max="18:00" required value="{{ $reservation->reservation_time}}">
                </div>

                <label>名前</label>
                <div>
                    <select class="form_select" name="user_name">
                        @foreach ($clinicals as $clinical)
                        <option value="{{ $clinical->name }}" name="user_name" @if($reservation->user_name ==
                            $clinical->name) selected @endif> {{ $clinical->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-grid gap-2 col-8 mx-auto my-5 ">
                    <button class="btn btn_primary submit_type mb-5" type="submit">更新</button>
                </div>

            </form>
            
        </div>
    </div>
</div>

@endsection
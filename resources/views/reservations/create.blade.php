@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">

            <form action="{{ route('reservations.store') }}" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                    <label>日付</label>
                    <input type="date" class="form-control @if($errors->any()) validation_border @endif input_date"
                        placeholder="" name="reservation_date">

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
                    <input type="time" id="appt" class="w-50 h-100" name="reservation_time" min="09:00" max="18:00" required>
                </div>

                <label>名前</label>
                <div>
                    <select class="form_select" name="user_name">

                        @foreach ($clinicals as $clinical)
                        <option value="{{ $clinical->name }}" name="user_name"> {{ $clinical->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
                    <button class="btn btn_primary submit_type" type="submit">保存</button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
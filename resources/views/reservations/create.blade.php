@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('reservations.store') }}" method="POST">
            {{csrf_field()}}

                <div class="form-group">
                    <label>日付</label>
                    <input type="date" class="form-control @if($errors->any()) validation_border @endif" placeholder="" name="reservation_date">
                            @if ($errors->any()) 
                                    <ul class="validation_message" style="color: red;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                            @endif
                </div>
                <div class="form-group">
                    <label>名前</label>
                    <select class="form-select" name="user_name">

                        @foreach ($clinicals as $clinical)
                        <option value="{{ $clinical->name }}" name="user_name"> {{ $clinical->name }} </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
                        <button class="btn btn-primary submit-type" type="submit">保存</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('reservations.store') }}" method="POST">
            {{csrf_field()}}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label>日付</label>
                    <input type="date" class="form-control" placeholder="" name="reservation_date">
                </div>
                <div class="form-group">
                    <label>名前</label>
                    <select class="form-select" name="user_name">
                      
                        @foreach ($clinicals as $clinical)
                        <option value="{{ $clinical->name }}" name="user_name"> {{ $clinical->name }} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
    </div>
</div>
@endsection
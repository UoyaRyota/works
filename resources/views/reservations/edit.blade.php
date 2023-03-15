@extends('layouts.app')

@section('content')
<?php
  // print('<pre>');
  // var_dump($reservation);
  // print('</pre>');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label>日付</label>
                    <input type="date" class="form-control" placeholder="" name="reservation_date" value="{{ $reservation->reservation_date}}">
                </div>
                <div class="form-group">
                    <label>名前</label>
                    <select class="form-select" name="user_name">
                    @foreach ($clinicals as $clinical)
                        <option value="{{ $clinical->name }}" name="user_name" 
                        @if($reservation->user_name == $clinical->name) selected @endif> {{ $clinical->name }} </option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
@endsection
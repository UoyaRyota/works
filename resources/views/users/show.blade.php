@extends('layouts.app')
@section('content')
<?php
print('<pre>');
var_dump($user);
print('</pre>');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h5>名前：{{$user->name}}</h5>
            </div>
            <div class="card-header">
              <img src="{{ $user->image_path }}" alt="画像">
            </div>
            <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" class="form-control-file" id="image" name="image">
            </div>

                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">edit</a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
          <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          {{method_field('PATCH')}}
            <div class="form-group">
                      <label>名前</label>
                      <input type="text" class="form-control" placeholder="名前" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" class="form-control-file" id="image" name="image_path">
            </div>
            <button type="submit" class="btn btn-primary">update</button>
          </form>
      </div>
    </div>
</div>
@endsection
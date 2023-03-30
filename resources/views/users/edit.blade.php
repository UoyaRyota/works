@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 user_main">
            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}

                <div class="image_area">
                    <img id="img" src="{{ $user->image_path }}">
                    <label for="input" class="filelabel">
                        <i class="fa-solid fa-camera fa-3x">
                            <input id="input" type="file" name="image_path" class="image_path w-100">
                        </i>
                    </label>
                </div>

                <div class="form-group">
                    <label>名前</label>
                    <input type="text" class="form-control" placeholder="名前" name="name" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="email" class="form-control" placeholder="test@gmail.com" name="email"
                        value="{{$user->email}}">
                </div>

                <x-button.form formTitle="更新" />
            </form>
        </div>
    </div>
</div>
@endsection

<!-- 要ファイル分割 -->
<script>

</script>
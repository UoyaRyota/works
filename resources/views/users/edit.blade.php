@extends('layouts.app')
@section('content')
<style>
  #img {
  display: block;
  width: 200px;
  height: 200px;
  object-fit: scale-down;
  background-color: #ddd;
  border-radius: 50%;
  margin: 0 auto;
  position: relative;
}

.box5 {
  position:relative;
}

.box5 .image_path, .filelabel{
  position:absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  color:#FFF;
}

.filelabel{

  padding: 10px 20px;
  border-radius: 8px;
  transition: all 0.5s;
}

.image_path{
  visibility:hidden;
}
.fileinput{
  display: none;
}

</style>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 basic">
          <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          {{method_field('PATCH')}}
          <div class="box5">
            <img id="img" src="{{ $user->image_path }}">
            <label for="input" class="filelabel"><i class="fa-solid fa-camera fa-3x"><input id="input" type="file" name="image_path" class="image_path"></i></label>
          </div>

            <div class="form-group">
                      <label>名前</label>
                      <input type="text" class="form-control" placeholder="名前" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                      <label>メールアドレス</label>
                      <input type="email" class="form-control" placeholder="test@gmail.com" name="email" value="{{$user->email}}">
            </div>

            <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
                        <button class="btn btn-primary submit-type" type="submit">更新</button>
                </div>
          </form>
      </div>
    </div>
</div>

  <script>
    document.querySelector('#input').addEventListener('change', (event) => {
      const file = event.target.files[0]

      if (!file) return
        const reader = new FileReader()

        reader.onload = (event) => {
                document.querySelector('#img').src = event.target.result
              }

              reader.readAsDataURL(file)
      });
  </script>

@endsection
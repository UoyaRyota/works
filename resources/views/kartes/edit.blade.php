@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <form action="{{ route('kartes.update',$karte->id) }}" method="POST">
    {{csrf_field()}}
    {{method_field('PATCH')}}

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
        <label>カルテ</label>
        <textarea class="form-control" placeholder="内容" rows="5" name="karte_body">{{$karte->karte_body}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">update</button>
    </form>
  </div>
</div>
@endsection
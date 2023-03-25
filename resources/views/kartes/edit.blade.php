@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-10">

        <form action="{{ route('kartes.update',$karte->id) }}" method="POST">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            
            <input type="hidden" name="clinical_id" value="{{ $clinical->id }}">

            <div class="form-group">
                <label>カルテ</label>
                <textarea class="form-control @if($errors->any()) validation_border @endif" placeholder=" 内容" rows="5"
                    name="karte_body">{{$karte->karte_body}}</textarea>

                @if ($errors->any())
                <ul class="validation_message text-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

            </div>

            <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
                <button class="btn btn_primary submit_type" type="submit">更新</button>
            </div>

        </form>

    </div>
</div>
@endsection
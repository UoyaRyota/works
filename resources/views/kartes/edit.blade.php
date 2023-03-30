@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-10">

        <form action="{{ route('kartes.update',$karte->id) }}" method="POST">
            {{csrf_field()}}
            {{method_field('PATCH')}}

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
            <x-button.form formTitle="更新"/>

        </form>

    </div>
</div>
@endsection
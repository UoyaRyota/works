@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{ route('kartes.store') }}" method="POST">
            {{csrf_field()}}

            <input type="hidden" name="clinical_id" value="{{ $clinical->id }}">

            <div class="form-group">
                <label>カルテ</label>
                <textarea class="form-control @if($errors->any()) validation_border @endif" placeholder="内容" rows="5"
                    name="karte_body"></textarea>
            </div>

            @if ($errors->any())
            <ul class="validation_message text-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <div class="d-grid gap-2 col-8 mx-auto my-5 ">
                <button class="btn btn_primary submit_type mb-5" type="submit">カルテを記入</button>
            </div>

        </form>
    </div>
</div>
@endsection
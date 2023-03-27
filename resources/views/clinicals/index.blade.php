@extends('layouts.app')

<div class="position-fixed w-100 bg-white d-flex">
        @if ( request()->is('*clinicals*') || request()->is('*reservations*') )
        <form method="POST" action="{{route('reservations.search')}}" class="search_form">
            {{csrf_field()}}
            <label>
                <input type="search" class="" name="search" value="" placeholder="search" aria-label="検索...">

            </label>
        </form>
        @else
        @endif
        <?php $user = Auth::user();?>



        <div class="user_test">
            <div class="user_login_icon user_icon_img">     
                <a href="{{ route('users.show',$user->id) }}">
                @if($user->image_path == '')
                    <img class="user_icon_img_pic" src="{{ asset('no-image.png') }}" alt="">
                @else
                    <img class="user_icon_img_pic" src="{{ $user->image_path }}" alt="">
                @endif
            </a>
        </div>

    </div>
        </div>
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 mt-5">

            <x-test title="お客様一覧" />

            <table class="table">

                <thead class="table_head">
                    <tr class="table_head_row">
                        <th class="table_head_row_cell table_right_left">名前</th>
                    </tr>
                </thead>

                <tbody class="table_body">

                    @foreach ($clinicals as $clinical)
                    <tr class="table_body_row">
                        <a href="{{ route('clinicals.show', $clinical->id) }}">
                            <td class="table_body_row_cell">
                                <a href="{{ route('clinicals.show', $clinical->id) }}"
                                    class="widelink">{{ $clinical->name }}</a>
                            </td>
                        </a>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

    <div class="d-grid gap-2 col-8 mx-auto my-5 ">
        <a href="{{ route('clinicals.create') }}" class="btn btn_primary mb-5">
            <button class="btn btn_primary" type="button">新規作成</button>
        </a>
    </div>

    <x-table pageLink="clinicals" buttonTitle="新規作成"/>

</div>
</div>


@endsection
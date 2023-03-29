@extends('layouts.app')
<div class="position-fixed w-100 bg-white d-flex">
    <x-search searchRes="{{route('clinicals.search')}}"/>
    <?php $user = Auth::user();?>
    <x-user-image/>
</div>
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 mt-5">

            <x-title title="お客様一覧" />

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

    <x-button.link pageLink="{{ route('clinicals.create') }}" pageTitle="新規作成"/>

</div>
</div>


@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="my-3"><h3 class="font-weight-bold">お客様一覧</h3></div>
            
            <table class="Table">

                <thead class="Table-Head">
                    <tr class="Table-Head-Row">
                        <th class="Table-Head-Row-Cell table-right-left">名前</th>
                    </tr>
                </thead>

                <tbody class="Table-Body">

                @foreach ($clinicals as $clinical)
                    <tr class="Table-Body-Row">
                        <a href="{{ route('clinicals.show', $clinical->id) }}">
                            <td class="Table-Body-Row-Cell">
                                <a href="{{ route('clinicals.show', $clinical->id) }}" class="widelink">{{ $clinical->name }}</a>
                            </td>
                        </a>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
        </div>

        <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
            <a href="{{ route('clinicals.create') }}" class="btn btn-primary">
                <button class="btn btn-primary" type="button">新規作成</button>
            </a>
        </div>

    </div>
</div>
@endsection
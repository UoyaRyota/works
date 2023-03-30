@extends('layouts.app')
<div class="position-fixed w-100 bg-white d-flex">
    <x-search searchRes="{{route('clinicals.search')}}" />
    <?php $user = Auth::user();?>
    <x-user-image />
</div>
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 mt-5">
            <x-title title="お客様一覧" />
            <table class="table">
                <x-table.head tableTitle="名前" tableTitleSec="" tableTitleTh="" />
                <tbody class="table_body">
                    @foreach ($clinicals as $clinical)
                    <x-table.content contentLink="{{ route('clinicals.show', $clinical->id) }}"
                        contentTitle="{{ $clinical->name }}" contentTitleSec="" contentTitleTh=""/>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <x-button.link pageLink="{{ route('clinicals.create') }}" pageTitle="新規作成" />
</div>

@endsection
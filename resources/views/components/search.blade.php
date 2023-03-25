<div class="position-fixed w-100 bg-white">
    <form method="POST" action="{{route('clinicals.search')}}" class="search_form">
        {{csrf_field()}}
        <label>
            <input type="search" class="" name="search" value="" placeholder="search" aria-label="検索...">
        </label>
    </form>
</div>
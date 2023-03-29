
<form method="POST" action="{{$searchRes}}" class="search_form">
    {{csrf_field()}}
    <label>
        <input type="search" class="" name="search" value="" placeholder="search" aria-label="検索...">
    </label>
</form>

<div>
    <select class="form_select" name="user_name">

        @foreach ($clinicals as $clinical)
        <option value="{{ $clinical->name }}" name="user_name"> {{ $clinical->name }} </option>
        @endforeach
    </select>
</div>
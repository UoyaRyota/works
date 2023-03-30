

@if($_SERVER['REQUEST_URI'] === '/clinicals')

<tr class="table_body_row">
    <a href="{{ $contentLink }}">
        <td class="table_body_row_cell">
            <a href="{{ $contentLink }}" class="widelink">{{ $contentTitle}}</a>
        </td>
    </a>
</tr>
{{ $contentTitleSec }}
{{ $contentTitleTh }}


@elseif($_SERVER['REQUEST_URI'] === '/reservations')

<tr class="table_body_row">
    <a href="{{ $contentLink }}">
        <td class="table_body_row_cell">
            <a href="{{ $contentLink }}"
                class="widelink">{{ $contentTitle }}</a>
        </td>
        <td class="table_body_row_cell">
            <a href="{{ $contentLink }}"
                class="widelink">{{ $contentTitleSec }}</a>
        </td>
        <td class="table_body_row_cell">
            <a href="{{ $contentLink }}"
                class="widelink">{{ $contentTitleTh }}</a>
        </td>
    </a>
</tr>

@else

<tr class="table_body_row">
    <a href="{{ $contentLink }}">
        <td class="table_body_row_cell">
            <a href="{{ $contentLink }}" class="widelink">{{ $contentTitle}}</a>
        </td>
    </a>
</tr>
{{ $contentTitleSec }}
{{ $contentTitleTh }}

@endif
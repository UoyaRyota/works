@if($_SERVER['REQUEST_URI'] === '/clinicals')
<thead class="table_head">
    <tr class="table_head_row">
        <th class="table_head_row_cell table_right_left">{{ $tableTitle }}</th>
        <!-- コントローラで処理 -->
        {{ $tableTitleSec}}
        {{ $tableTitleTh}}
    </tr>
</thead>

@elseif($_SERVER['REQUEST_URI'] === '/reservations')
<thead class="table_head">
    <tr class="table_head_row">
        <th class="table_head_row_cell table_left">{{ $tableTitle }}</th>
        <th class="table_head_row_cell">{{ $tableTitleSec}}</th>
        <th class="table_head_row_cell table_right">{{ $tableTitleTh }}</th>
    </tr>
</thead>

@else
<thead class="table_head">
    <tr class="table_head_row">
        <th class="table_head_row_cell table_right_left">{{ $tableTitle }}</th>
        <!-- コントローラで処理 -->
        {{ $tableTitleSec}}
        {{ $tableTitleTh}}
    </tr>
</thead>

@endif



<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Head extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tableTitle;
    public $tableTitleSec;
    public $tableTitleTh;
    
    public function __construct($tableTitle, $tableTitleSec, $tableTitleTh)
    {
        $this->tableTitle = $tableTitle;
        $this->tableTitleSec = $tableTitleSec;
        $this->tableTitleTh = $tableTitleTh;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.head');
    }
}

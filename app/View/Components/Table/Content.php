<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Content extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $contentLink;
    public $contentTitle;
    public $contentTitleSec;
    public $contentTitleTh;
    public function __construct($contentLink,$contentTitle,$contentTitleSec,$contentTitleTh)
    {
        $this->contentLink = $contentLink;
        $this->contentTitle = $contentTitle;
        $this->contentTitleSec = $contentTitleSec;
        $this->contentTitleTh = $contentTitleTh;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.content');
    }
}

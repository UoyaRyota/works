<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pageLink;
    public $pageTitle;
    public function __construct($pageLink,$pageTitle)
    {
        $this->pageLink = $pageLink;
        $this->pageTitle = $pageTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.link');
    }
}

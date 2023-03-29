<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $formTitle;
    public function __construct($formTitle)
    {
        $this->formTitle = $formTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.form');
    }
}

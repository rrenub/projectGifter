<?php

namespace App\View\Components;

use Illuminate\View\Component;

class filterCheckbox extends Component
{
    public $label;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.filter-checkbox');
    }
}

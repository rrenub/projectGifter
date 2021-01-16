<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card-item-home extends Component
{


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $description, $price, $id)
    {
        $this->$name = $name;
        $this->$description = $description;
        $this->$price = $price;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-item-home');
    }
}

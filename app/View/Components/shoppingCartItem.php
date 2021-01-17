<?php

namespace App\View\Components;

use Illuminate\View\Component;

class shoppingCartItem extends Component
{
    public $name;
    public $description;
    public $price;
    public $idProd;
    public $img;
    public $cantidad;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $description, $price, $idProd, $img, $cantidad)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->idProd = $idProd;
        $this->img = $img;
        $this->cantidad = $cantidad;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.shopping-cart-item');
    }
}

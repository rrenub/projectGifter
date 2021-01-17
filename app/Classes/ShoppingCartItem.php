<?php
namespace App\Classes;

class ShoppingCartItem {

    var $name, $description, $price, $quantity , $img, $id;

    public function __construct($name, $description, $price, $img, $quantity, $id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->img = $img;
        $this->id = $id;
    }

    public function getTotalPrice() {
        return $this->quantity * $this->price;
    }
}
?>

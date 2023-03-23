<?php

class Product{
    $name;
    $brand;
    $price;
    $inStock;

    public function __construct(
    string $_name,    
    string $_brand,
    int $_price,
    int $_inStock,
    )

    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->inStock = $_inStock;
    }
}

/* class Category{
    $animal;
} */

class Food extends Product{
    $foodType;
    $flavor;
    $weight;
    $expiryDate;
    
}

class Toys extends Product{
    $Name;
    $material;
    $color;
}

class Accessory extends Product{
    $type;
}
?>
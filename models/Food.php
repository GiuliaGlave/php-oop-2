<?php
require_once __DIR__ . "/Product.php";

class Food extends Product{
    public string $food_type;
    public string $flavor;
    public int $weight;
   
    public function __construct(
    int $_id,
   /*  Category $_category, */
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,

    string $_food_type,
    string $_flavor,
    int $_weight
    )
    {
        parent::__construct(
        $_id, 
       /*  $_category, */ 
        $_name, 
        $_brand, 
        $_price, 
        $_in_stock
        );

        $this->food_type = $_food_type;
        $this->flavor = $_flavor;
        $this->weight = $_weight;
    } 
}

$food_item = new Food (111, /* "Cane", */ "Biscotti Fruity", "RollsRocky", 4.55, 35, "biscotti", "mela", 300,);
/* $food_item = new Food (112,"Biscrok", "Pedogree", 1.52, "biscotti", "manzo", 200) */
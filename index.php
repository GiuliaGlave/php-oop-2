<?php

class Product{
    public $id;
    public $name;
    public $brand;
    public $price;
    public $in_stock;

    public function __construct(
    int $_id,
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,
    )

    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->in_stock = $_in_stock;
    }
}

/* class Category{
    $animal;
} */

class Food extends Product{
    public string $food_type;
    public string $flavor;
    public int $weight;
   
    public function __construct(
    int $_id,
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,

    string $_food_type,
    string $_flavor,
    int $_weight
    )
    {
        parent::__construct($_id, $_name, $_brand, $_price, $_in_stock);

        $this->food_type = $_food_type;
        $this->flavor = $_flavor;
        $this->weight = $_weight;
    } 
}

$food_item = new Food (111, "Biscotti Fruity", "RollsRocky", 4.55, 35, "biscotti", "mela", 300,);
/* $food_item = new Food (112,"Biscrok", "Pedogree", 1.52, "biscotti", "manzo", 200) */
var_dump($food_item);

class Toy extends Product{
    public $toy_name;
    public $material;
    public $color;

    public function __construct(
    int $_id,
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,

    string $_toy_type,
    string $_material,
    string $_color
    )
    {
        parent::__construct($_id, $_name, $_brand, $_price, $_in_stock);

        $this->toy_type = $_toy_type;
        $this->material = $_material;
        $this->color = $_color;
    } 
}

$toy_item = new Toy (222, "Palla di Juta con Finiture Colorate", "Camon", 3.23, 13, "pallina", "juta", "giallo",);
var_dump($toy_item);

class Accessory extends Product{
    public $accessory_type;
    public $details;

        public function __construct(
    int $_id,
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,

    string $_accessory_type,
    string $_details
    )
    {
        parent::__construct($_id, $_name, $_brand, $_price, $_in_stock);

        $this->accessory_type = $_accessory_type;
        $this->details = $_details;
    } 
}

$accessory_item = new Accessory (333, "Boston Petit Sofà Fantasia di Cuori", "Fabotex", 49.15, 6, "cuccia", "Comodissimo sofà in tessuto poliestere 100% idrorepellente, antigraffio, alta resistenza");
var_dump($accessory_item);
?>
<?php
require_once __DIR__ . "/Product.php";
class Toy extends Product{
    public $toy_type;
    public $material;
    public $color;

    public function __construct(
    int $_id,
    /* Category $_category, */
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,

    string $_toy_type,
    string $_material,
    string $_color
    )
    {
        parent::__construct($_id, /* $_category, */ $_name, $_brand, $_price, $_in_stock);

        $this->toy_type = $_toy_type;
        $this->material = $_material;
        $this->color = $_color;
    } 
}
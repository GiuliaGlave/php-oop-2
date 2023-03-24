<?php
require_once __DIR__ . "/Product.php";
class Accessory extends Product{
    public $accessory_type;
    public $details;

    public function __construct(
   int $_id,
   /*  Category $_category, */
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,

    string $_accessory_type,
    string $_details
    )
    {
        parent::__construct($_id, /* $_category, */ $_name, $_brand, $_price, $_in_stock);

        $this->accessory_type = $_accessory_type;
        $this->details = $_details;
    } 
}
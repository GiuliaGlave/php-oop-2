<?php

require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/Accessory.php";

class Product{
    public $id;
   /*  protected $category; */
    public $name;
    public $brand;
    protected $price;
    public $in_stock;

    public function __construct(
    int $_id,
  /*   Category $_category, */
    string $_name,    
    string $_brand,
    float $_price,
    int $_in_stock,
    )
    {
        $this->id = $_id;
     /*    $this->category = $_category; */
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->in_stock = $_in_stock;
    }

  /*   public function setCategory($_name){
        if(!$category instanceof Category) return false;
        $this->category = $_category;
        return $this;
    }
    public function getCategory(){
        return $this->category;
    }
 */
    public function setName($_name){
        if(!is_string($_name)|| $name === "") return false;
        $this->name = $_name;
        return $this;
    }
    public function getName(){
        return $this->name;
    }
    public function setPrice($_name){
        if(!is_float($_price)) return false;
        $this->price = $_price;
        return $this;
    }
    public function getPrice(){
        return $this->price;
    }

}
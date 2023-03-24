<?php
/* 
class Category{
    protected $name;
    private static $allowed_category = [
        "Cane",
        "Gatto"
    ];
    
    public function __construct(
    string $_name,    
    )
    {
        $this->setName($_name);
    }

     public function setName($_name){
        if(!is_string($_name)|| !in_array($_name, self::$allowed_category)) return false;
        $this->name = $_name;
        return $this;
    }
     public function getName(){
        return $this->name;
    }
} */
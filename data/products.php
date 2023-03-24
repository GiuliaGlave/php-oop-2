<?php

require_once __DIR__ . "/../models/Food.php";
/* require_once __DIR__ . "/../models//Category.php"; */
require_once __DIR__ . "/../models//Toy.php";
require_once __DIR__ . "/../models//Accessory.php";

$products = [

    new Food (111, /* "Cane", */ "Biscotti Fruity", "RollsRocky", 4.55, 35, "biscotti", "mela", 300,),
    new Food (112,"Biscrok", "Pedogree", 1.52, 24, "biscotti", "manzo", 200),

    new Toy (222,/*  "Cane", */ "Palla di Juta con Finiture Colorate", "Camon", 3.23, 13, "pallina", "juta", "giallo",),

    new Accessory (333,/* "Cane", */ "Boston Petit Sofà Fantasia di Cuori", "Fabotex", 49.15, 6, "cuccia", "Comodissimo sofà in tessuto poliestere 100% idrorepellente, antigraffio, alta resistenza"),
   
];
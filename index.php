<?php

require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/data/products.php";
/* require_once __DIR__ . "/models/Category.php"; */
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Toy.php";
require_once __DIR__ . "/models/Accessory.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoolean</title>
</head>

<body>
    <?php
    var_dump($products) ?>
</body>

</html>
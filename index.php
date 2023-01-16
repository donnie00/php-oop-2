<?php
require_once "./Models/Food.php";
require_once "./Models/Game.php";
require_once "./Models/Wearable.php";

$dog = new Product('pet', 'Pico', 'dog', '23.4', 'Just a little dog nothing more', true);
$dogFood = new Food('superdog', 'dog', 33.2, '2022-1-2', 33);
$dogBall = new Games('ball', 'dog', '5.99', 'plastic', 'red');
$dogCollar = new Wearable('Collar', 'dog', 5.99, 'M');

$dog->setDescription('Just a little dog');
$dog->setInStock('40');

echo '<pre>';
echo '$dog' . '<br />';
print_r($dog);

echo '$dogFood' . '<br />';
print_r($dogFood);

echo '$dogBall' . '<br />';
print_r($dogBall);

echo '$dogCollar' . '<br />';
print_r($dogCollar);
echo '</pre>';


?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PetStore</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>

   <div class="container">
      <header>
         <h1>My online shop</h1>
      </header>
   </div>

</body>

</html>
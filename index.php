<?php
require_once __DIR__ . "/Models/Product.php";

$dog = new Product('Pico', 'dog', '23', 'Just a little dog nothing more', true);

echo '<pre>';
echo '$dog' . '<br />';
print_r($dog);
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
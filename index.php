<?php
require_once "./Models/Food.php";
require_once "./Models/Game.php";
require_once "./Models/Wearable.php";
include "./productList.php";



$productListClasses = array_map(function ($item) {

   $toReturn = null;

   if ($item['type'] === 'food') {
      $toReturn = new Food($item['name'], $item['category'], $item['price'], $item['expiryDate'], $item['weight']);
   } else if ($item['type'] === 'game') {
      $toReturn =  new Games($item['name'], $item['category'], $item['price'], $item['material'], $item['color']);
   } else if ($item['type'] === 'wearable') {
      $toReturn = new Wearable($item['name'], $item['category'], $item['price'], $item['size']);
   } else {
      $toReturn = new Product($item['type'], $item['name'], $item['category'], $item['price']);
   }

   $toReturn->setDescription($item['description']);
   $toReturn->setImage($item['image']);

   return $toReturn;
}, $productList);


// echo '<pre>';
// print_r($productListClasses);
// echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PetStore</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

   <div class="container">

      <h1>My online shop</h1>

      <div class="row">
         <?php foreach ($productListClasses as $product) { ?>
            <div class="col-4">
               <div class="card mb-3">
                  <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">

                  <div class="card-body">
                     <?php if ($product->getCategory() === 'Cat') { ?>
                        <small class="text-muted">
                           <i class="fa-solid fa-cat"></i>
                        </small>
                     <?php } else if ($product->getCategory() === 'Dog') { ?>
                        <small class="text-muted">
                           <i class="fa-solid fa-dog"></i>
                        </small>
                     <?php } ?>
                     <h5 class="card-title"><?php echo $product->getName() ?></h5>
                     <p class="card-text"><?php echo $product->getDescription() ?></p>
                     <p class="card-text">&euro;<?php echo $product->getPrice() ?></p>
                     <p class="card-text">
                        <?php method_exists($product, 'getWeigth') ? $product->getWeigth() : '' ?>
                     </p>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>

</body>

</html>
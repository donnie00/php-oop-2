<?php
require_once "./Models/Product.php";
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

      <header class="d-flex align-items-center justify-content-between">
         <h1 class="my-3">My online shop</h1>
         <span>
            Guest
            <i class="fa-solid fa-user mx-2"></i>
         </span>
      </header>

      <div class="row">
         <?php foreach ($productListClasses as $product) { ?>
            <div class="col-4 mb-3">
               <div class="card h-100">
                  <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">

                  <div class="card-body">
                     <small class="text-muted">
                        <?php if ($product->getCategory() === 'Cat') { ?>
                           <i class="fa-solid fa-cat"></i>
                        <?php } else if ($product->getCategory() === 'Dog') { ?>
                           <i class="fa-solid fa-dog"></i>
                        <?php } ?>
                        /
                        <?php echo $product->getType() ?>
                     </small>

                     <h5 class="card-title"><?php echo $product->getName() ?></h5>
                     <p class="card-text"><?php echo $product->getDescription() ?></p>
                  </div>

                  <ul class="list-group list-group-flush">
                     <?php if (method_exists($product, 'getWeight')) { ?>
                        <li class="list-group-item">
                           <?php echo "Weight: " . $product->getWeight() . "kg" ?>
                        </li>
                     <?php } ?>
                     <?php if (method_exists($product, 'getMaterial')) { ?>
                        <li class="list-group-item">
                           <?php echo "Material: " . $product->getMaterial() ?>
                        </li>
                     <?php } ?>
                     <?php if (method_exists($product, 'getColor')) { ?>
                        <li class="list-group-item">
                           <?php echo "Color: " . $product->getColor() ?>
                        </li>
                     <?php } ?>
                     <?php if (method_exists($product, 'getSize')) { ?>
                        <li class="list-group-item">
                           <?php echo "Size: " . $product->getSize() ?>
                        </li>
                     <?php } ?>
                     <?php if (method_exists($product, 'getExpiryDate')) { ?>
                        <li class="list-group-item">
                           <?php echo "Exp: " . $product->getExpiryDate() ?>
                        </li>
                     <?php } ?>
                  </ul>
                  <div class="card-footer d-flex justify-content-between align-items-center">
                     <span class="card-text">
                        &euro;<?php echo $product->getPrice() ?>
                     </span>
                     <button href="#" class="btn btn-primary ms-3 d-inline">Add to cart</button>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>

</body>

</html>
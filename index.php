<?php
require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/Food.php";
require_once "./Models/Game.php";
require_once "./Models/Wearable.php";
require_once "./Models/User.php";
require_once "./Models/CreditCard.php";
include "./productList.php";

$catCategory = new Category('Cat', 'fas fa-cat');
$dogCategory = new Category('Dog', 'fas fa-dog');

$user1 = new User('Donnie');
$user1->setCreditCard(new creditCard(1234567, '2023-2-3', 'Donnie'));

$productListClasses = array_map(function ($item) {

   $toReturn = null;

   switch ($item['type']) {
      case 'food':
         $toReturn = new Food($item['name'], new Category($item['category']), $item['price'], $item['expiryDate'], $item['weight']);
         break;
      case 'game':
         $toReturn =  new Games($item['name'], new Category($item['category']), $item['price'], $item['material'], $item['color']);
         break;
      case 'wearable':
         $toReturn = new Wearable($item['name'], new Category($item['category']), $item['price'], $item['size']);
         break;
      default:
         $toReturn = new Product($item['type'], $item['name'], new Category($item['category']), $item['price']);
   }

   $toReturn->setDescription($item['description']);
   $toReturn->setImage($item['image']);

   return $toReturn;
}, $productList);

$user1->setCart([$productListClasses[0], $productListClasses[1], $productListClasses[4]]);

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

      <header class="d-flex align-items-center justify-content-between my-3">
         <h1>My online shop</h1>
         <div>
            <p>
               <?php echo $user1->getUserName() ?>
               <i class="fa-solid fa-user mx-2"></i>
            </p>
            <p>Credit Card:
               <?php if ($user1->getCreditCard()->checkExpired()) {
                  echo "<span class='text-danger'>EXPIRED</span>";
               } else {
                  echo "<span class='text-success'>OK</span>";
               } ?>
            </p>
         </div>
      </header>

      <div>
         <h5>Your cart</h5>
         <ul class="list-inline">
            <?php foreach ($user1->getCart() as $cartItem) { ?>
               <li class="list-inline-item text-bg-light p-2 rounded-2"><?php echo $cartItem->getName() . " " . $cartItem->getPrice() . '&euro;' ?></li>
            <?php } ?>
         </ul>
         <h5>
            Total: <?php if ($user1->isRegistered()) : ?>
               <span class="text-decoration-line-through">
                  <?php echo "{$user1->getPrice()}&euro;" ?>
               </span>
               <i class="fa-solid fa-arrow-right mx-3"></i>
               <span>
                  <?php echo "{$user1->getFinalPrice()}&euro;" ?>
               </span>
            <?php else : ?>
               <?php echo "{$user1->getFinalPrice()}&euro;" ?>
               <i class="fa-solid fa-arrow-right"></i>
               <span>Ottieni uno sconto del 20&percnt; registrandoti!</span>
            <?php endif ?>
         </h5>
      </div>

      <div class="row">
         <?php foreach ($productListClasses as $product) { ?>
            <div class="col-4 mb-3">
               <div class="card h-100">
                  <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">

                  <div class="card-body">
                     <small class="text-muted">
                        <?php echo $product->getCategory()->getIconClass() ?>
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
                     <button class="btn btn-primary ms-3 d-inline">Add to cart</button>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>

</body>

</html>
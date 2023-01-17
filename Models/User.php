<?php
class User
{
   protected $userName;
   protected $creditCard;
   protected $cart = [];
   protected $totalPrice = 0;
   private $discount = 0.80;

   function __construct($_userName = 'Guest')
   {
      $this->setUserName($_userName);
   }

   /**
    * Get the value of userName
    */
   public function getUserName()
   {
      return ucfirst($this->userName);
   }

   /**
    * Set the value of userName
    *
    * @return  self
    */
   public function setUserName($userName)
   {
      $this->userName = $userName;

      return $this;
   }

   /**
    * Get the value of cart
    */
   public function getCart()
   {
      return $this->cart;
   }

   /**
    * Set the value of cart
    *
    * @return  self
    */
   public function setCart($cart)
   {
      $this->cart = $cart;

      return $this;
   }

   /**
    * Get the value of totalPrice
    */
   public function getPrice()
   {
      $total = $this->totalPrice;

      foreach ($this->getCart() as $cartItem) {
         $total += $cartItem->getPrice();
      }
      return $total;
   }

   /**
    * Set the value of totalPrice
    *
    * @return  self
    */
   public function setPrice($totalPrice)
   {
      $this->totalPrice = $totalPrice;

      return $this;
   }

   /**
    * Get the value of creditCard
    */
   public function getCreditCard()
   {
      return $this->creditCard;
   }

   /**
    * Set the value of creditCard
    *
    * @return  self
    */
   public function setCreditCard($creditCard)
   {
      $this->creditCard = $creditCard;

      return $this;
   }

   public function isRegistered()
   {
      $registered = false;

      if ($this->userName != 'guest') {
         $registered = true;
      }

      return $registered;
   }

   public function getFinalPrice()
   {

      if ($this->isRegistered()) {
         $finalPrice = $this->getPrice() * $this->discount;
      } else {
         $finalPrice = $this->getPrice();
      }

      return $finalPrice;
   }
}

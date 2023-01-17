<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
   protected string $type = 'Food';

   protected DateTime $expiryDate;
   protected float $weight;

   function __construct($_name, $_category, $_price, $_expiryDate, $_weight)
   {
      parent::__construct($this->type, $_name, $_category, $_price);

      $this->setExpiryDate($_expiryDate);
      $this->setWeight($_weight);
   }

   /**
    * Get the value of expiryDate
    */
   public function getExpiryDate()
   {
      return $this->expiryDate->format('d-m-Y');
   }

   /**
    * Set the value of expiryDate
    *
    * @return  self
    */
   public function setExpiryDate(string $expiryDate)
   {
      $this->expiryDate = new DateTime($expiryDate);
      // $this->expiryDate = $expiryDate;

      return $this;
   }

   /**
    * Get the value of weight
    */
   public function getWeight()
   {
      return $this->weight;
   }

   /**
    * Set the value of weight
    *
    * @return  self
    */
   public function setWeight($weight)
   {
      $this->weight = $weight;

      return $this;
   }
}

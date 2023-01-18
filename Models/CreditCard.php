<?php
class creditCard
{
   protected $number;
   protected $expiryDate;
   protected $name;

   function __construct($_number, $_expiryDate, $_name)
   {
      $this->setNumber($_number);
      $this->setExpiryDate($_expiryDate);
      $this->setName($_name);
   }

   /**
    * Get the value of number
    */
   public function getNumber()
   {
      return $this->number;
   }

   /**
    * Set the value of number
    *
    * @return  self
    */
   public function setNumber($number)
   {
      $this->number = $number;

      return $this;
   }

   /**
    * Get the value of expiryDate
    */
   public function getExpiryDate()
   {
      return $this->expiryDate->format('d/m/Y');
   }

   /**
    * Set the value of expiryDate
    *
    * @return  self
    */
   public function setExpiryDate($expiryDate)
   {
      $newDate = new DateTime($expiryDate);

      $this->expiryDate = $newDate;

      return $this;
   }

   /**
    * Get the value of name
    */
   public function getName()
   {
      return $this->name;
   }

   /**
    * Set the value of name
    *
    * @return  self
    */
   public function setName($name)
   {
      $this->name = $name;

      return $this;
   }

   public function checkExpired()
   {
      $expired = false;

      if ($this->expiryDate <= new DateTime()) {
         $expired = true;
      }

      return $expired;
   }
}

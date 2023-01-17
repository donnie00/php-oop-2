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
      return $this->expiryDate;
   }

   /**
    * Set the value of expiryDate
    *
    * @return  self
    */
   public function setExpiryDate($expiryDate)
   {
      $createDate = new DateTime($expiryDate);
      $formattedDate = $createDate->format('d/m/Y');

      $this->expiryDate = $formattedDate;

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

      $todayDate = new DateTime();
      $formattedToday = $todayDate->format('d/m/Y');

      if ($this->getExpiryDate() <= $formattedToday) {
         $expired = true;
      }

      return $expired;
   }
}

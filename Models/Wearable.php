<?php
require_once __DIR__ . '/Product.php';

class Wearable extends Product
{
   protected string $type = 'Wearable';

   protected string $size;

   function __construct($_name, $_category, $_price, $_size)
   {
      parent::__construct($this->type, $_name, $_category, $_price);

      $this->setSize($_size);
   }

   /**
    * Get the value of size
    */
   public function getSize()
   {
      return $this->size;
   }

   /**
    * Set the value of size
    *
    * @return  self
    */
   public function setSize($size)
   {
      $this->size = $size;

      return $this;
   }
}

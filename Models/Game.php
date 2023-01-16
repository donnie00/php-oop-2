<?php
require_once __DIR__ . '/Product.php';

class Games extends Product
{
   protected string $type = 'Games';

   protected string $material;
   protected string $color;

   function __construct($_name, $_category, $_price, $_material, $_color)
   {
      parent::__construct($this->type, $_name, $_category, $_price);

      $this->setMaterial($_material);
      $this->setColor($_color);
   }

   /**
    * Get the value of materials
    */
   public function getMaterial()
   {
      return $this->material;
   }

   /**
    * Set the value of materials
    *
    * @return  self
    */
   public function setMaterial($material)
   {
      $this->material = $material;

      return $this;
   }

   /**
    * Get the value of color
    */
   public function getColor()
   {
      return $this->color;
   }

   /**
    * Set the value of color
    *
    * @return  self
    */
   public function setColor($color)
   {
      $this->color = $color;

      return $this;
   }
}

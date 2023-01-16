<?php
class Product
{
   protected string $name;
   protected string $category;
   protected float $price;
   protected string $description;
   protected bool $inStock;

   function __construct($_name, $_category, $_price, $_description, $_inStock)
   {
      $this->setName($_name);
      $this->setCategory($_category);
      $this->setPrice($_price);
      $this->setDescription($_description);
      $this->setInStock($_inStock);
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

   /**
    * Get the value of category
    */
   public function getCategory()
   {
      return $this->category;
   }

   /**
    * Set the value of category
    *
    * @return  self
    */
   public function setCategory($category)
   {
      $this->category = $category;

      return $this;
   }

   /**
    * Get the value of price
    */
   public function getPrice()
   {
      return $this->price;
   }

   /**
    * Set the value of price
    *
    * @return  self
    */
   public function setPrice($price)
   {
      $this->price = $price;

      return $this;
   }

   /**
    * Get the value of decription
    */
   public function getDescription()
   {
      return $this->description;
   }

   /**
    * Set the value of decription
    *
    * @return  self
    */
   public function setDescription($description)
   {
      $this->description = $description;

      return $this;
   }

   /**
    * Get the value of inStock
    */
   public function getInStock()
   {
      return $this->inStock;
   }

   /**
    * Set the value of inStock
    *
    * @return  self
    */
   public function setInStock($inStock)
   {
      if ($inStock) {
         $this->inStock = true;
      } else {
         $this->inStock = false;
      }

      $this->inStock = $inStock;
   }
}

<?php
class Product
{
   protected string $name;
   protected string $category;
   protected string $type;
   protected float $price;
   protected string $description;
   protected int $inStock;

   function __construct($_type, $_name, $_category, $_price)
   {
      $this->setName($_name);
      $this->setCategory($_category);
      $this->setType($_type);
      $this->setPrice($_price);
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
    * Get the value of type
    */
   public function getType()
   {
      return $this->type;
   }

   /**
    * Set the value of type
    *
    * @return  self
    */
   public function setType($type)
   {
      $this->type = $type;

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

      $this->inStock = $inStock;

      return $this;
   }
}

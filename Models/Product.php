<?php
require_once __DIR__ . '/Category.php';
class Product
{
   protected string $type;
   protected string $name;
   //Private?
   protected Category $category;
   protected float $price;
   protected string $description;
   // static? private?
   protected int $inStock;
   protected string $image;

   function __construct($_type, $_name, $_category, $_price)
   {
      $this->setType($_type);
      $this->setName($_name);
      $this->setCategory($_category);
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
   public function setCategory($_category)
   {
      $this->category = $_category;

      return $this;
   }

   /**
    * Get the value of type
    */
   public function getType()
   {
      return ucfirst($this->type);
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
      if ($this->description === '') {
         return $this->description = 'No description added';
      } else {
         return $this->description;
      }
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

   /**
    * Get the value of image
    */
   public function getImage()
   {
      return $this->image;
   }

   /**
    * Set the value of image
    *
    * @return  self
    */
   public function setImage($image)
   {
      $this->image = $image;

      return $this;
   }
}

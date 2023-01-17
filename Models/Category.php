<?php
class Category
{
   protected string $name;
   protected $icon;

   function __construct($_name, $_icon = null)
   {
      $this->setName($_name);
      $this->setIcon($_icon);
   }


   public function getName()
   {
      return strtolower($this->name);
   }

   public function setName($_name)
   {
      $this->name = $_name;
   }

   /**
    * Get the value of icon
    */
   public function getIcon()
   {
      return $this->icon;
   }

   /**
    * Set the value of icon
    *
    * @return  self
    */
   public function setIcon($_icon)
   {
      switch ($this->getName()) {
         case ('dog'):
            $_icon = 'fas fa-dog';
            break;
         case 'cat':
            $_icon = 'fas fa-cat';
            break;
      }

      $this->icon = $_icon;

      return $this;
   }

   public function getIconClass()
   {
      return "<i class='$this->icon'></i>";
   }
}

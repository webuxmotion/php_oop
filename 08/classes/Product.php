<?php

class Product
{
  public $name;
  public $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function price() {
    return $this->price;
  }
  
  public function getProduct() {
    return  "<hr><b>About product:</b><br>
      Name: {$this->name}<br>
      Price: {$this->price}<br>
    "; 
  }
}
?>

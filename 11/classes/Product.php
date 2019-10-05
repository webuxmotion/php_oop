<?php

abstract class Product
{
  private $name;
  protected $price;

  private $discount = 0;

  const TEST = 10;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price - ($this->discount / 100 * $this->price);
  }

  public function getDiscount(): int {
    return $this->discount;
  }

  public function setDiscount(int $discount) {
    $this->discount = $discount;
  }
  
  public function getProduct() {
    return  "<hr><b>About product:</b><br>
      Name: {$this->name}<br>
      Price: {$this->getPrice()}<br>
    "; 
  }

  abstract protected function addProduct($name, $price);
}
?>

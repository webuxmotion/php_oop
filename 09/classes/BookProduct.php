<?php

class BookProduct extends Product
{
  public $numPages;

  public function __construct($name, $price, $numPages = null) {

    parent::__construct($name, $price);

    $this->numPages = $numPages;
    $this->setDiscount(5);

  }

  public function getProduct() {
    $out = parent::getProduct();

    $out .= "Old price: {$this->price}<br>";
    $out .= "Discount: {$this->getDiscount()}%<br>";
    $out .= "Num pages: {$this->numPages}<br>";

    return $out;
  }
}
?>

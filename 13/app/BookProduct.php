<?php

namespace app;

use wfm\interfaces\I3D;
use wfm\Product;

class BookProduct extends Product implements I3D
{
  public $numPages;

  const TEST = 20;

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

  public function test() {
  }

  public function addProduct($name, $price) {

  }
}
?>
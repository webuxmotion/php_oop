<?php

namespace app;

use wfm\interfaces\IGadget;
use wfm\traits\TColor;
use wfm\Product;

class NotebookProduct extends Product implements IGadget
{
  use TColor;

  public $cpu;

  public function __construct($name, $price, $cpu = null) {

    parent::__construct($name, $price);

    $this->cpu = $cpu;
  }

  public function getCpu() {
    return $this->cpu;
  }


  public function getProduct() {
    $out = parent::getProduct();

    $out .= "Processor: {$this->cpu}<br>";

    return $out;
  }

  public function addProduct($name, $price) {

  }

  public function getCase() {

  }
}
?>

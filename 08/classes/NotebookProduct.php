<?php

class NotebookProduct extends Product
{
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
}
?>

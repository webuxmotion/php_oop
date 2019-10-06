<?php

namespace app;

class A 
{
  protected const TEST = 'Test A';

  public function getTest() {
    return static::TEST;
  }

  public function do1() {
    echo 'do1<br>';
    return $this;
  }

  public function do2() {
    echo 'do2<br>';
    return $this;
  }
}
?>

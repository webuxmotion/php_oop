<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    const TEST_CAR = 'Prototype';
    const TEST_CAR_SPEED = 300;

    public static $countCar = 0;

    public function __construct() {
      self::$countCar++;
    }

    public function getCount() {
      return self::$countCar;
    }

    public function getCarInfo() {

      $year = $this->year ?? '-';

        return "<h3>О моем авто</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Количество колес: {$this->wheels}<br>
            Год выпуска: {$year}<br>
            Скорость: {$this->speed}<br>";
    }

    public function getPrototypeInfo() {
        return "<h3>Test car:</h3>
            Name: " . self::TEST_CAR . "<br>
            Скорость: " . self::TEST_CAR_SPEED . "<br>";
    }
}

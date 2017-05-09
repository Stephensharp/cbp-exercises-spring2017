<?php

class dog
{
  public $name = null;
  public $breed = null;
  public $color = null;
  public $position = 'lying down';

  public function bark()
  {
    echo 'WOOF!';
  }

  public function sit()
  {
    $this->position = 'sitting';
  }
}

$my_dog = new dog();

var_dump($my_dog);

$your_dog = new dog();

var_dump($your_dog);

echo $your_dog->position;

$your_dog->position = 'jumping';

echo $your_dog->position;

$your_dog->bark();

$his_dog = [
    'name' => null,
    'position' => 'lying down'
];

echo $his_dog['position'];

$his_dog['position'] = 'jumping';

echo $his_dog['position'];

class car
{
    public $brand = null;
    public $color = null;

    public function setData($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$my_car = new car();
$my_car->setData('VW', 'Red');
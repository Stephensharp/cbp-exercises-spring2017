<?php

class vehicle
{
    public $wheels_count = null;
    public $color = null;
    public $avg_speed = null;

    public function travel($distance)
    {
        return $distance / $this->avg_speed;
    }
}

$some_vehicle = new vehicle();
$some_vehicle->avg_speed = 25;

echo 'It takes the vehicle ' . $some_vehicle->travel(100) . ' hours to travel 100 km';

class car extends vehicle
{
    public static $nr = 30;

    public $wheels_count = 4;

    public function change_color($color)
    {
        $this->color = $color;
    }
}

//$some_vehicle->change_color('red');

$some_car = new car();
$some_car->change_color('blue');
var_dump($some_car);

class horse extends vehicle
{
    public $wheels_count = 0;

    public $is_fed = false;

    public function feed()
    {
        $this->is_fed = true;
    }
}

//$some_car->feed();
$some_horse = new horse();
var_dump($some_horse);


//$some_horse->change_color('black');

class sports_car extends car
{
    public static $nr = 10;

    public $avg_speed = 120;
}
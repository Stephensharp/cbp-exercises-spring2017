<?php

require 'carrot_cake.php';

$carrot_cake_for_jan = new carrot_cake('wheat', 'brown', 'chocolate');
$carrot_cake_for_jan->topping = 'cream';
echo $carrot_cake_for_jan->topping;

var_dump($carrot_cake_for_jan);

$carrot_cake_for_atena = new carrot_cake('wheat', 'white');
var_dump(var_dump('a'));
echo var_dump($carrot_cake_for_atena).'<br>';

var_dump(carrot_cake::$total_carrots_used);

var_dump(carrot_cake::$last_cake_baked_at);
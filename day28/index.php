<?php

require 'giraffe.php';

$first_giraffe = new giraffe('Micky', 'meadow');
$first_giraffe->eat();
$first_giraffe->sleep();
$first_giraffe->goTo('pond');

$second_giraffe = new giraffe('Todd');
$second_giraffe->drink();


// OUTPUT
var_dump($first_giraffe);
var_dump($second_giraffe);


$nr_of_giraffes = giraffe::getNrOfGiraffes();
var_dump($nr_of_giraffes);

$nr_of_giraffes_in_forest = giraffe::getNrOfGiraffesInForest();
var_dump($nr_of_giraffes_in_forest);

echo $first_giraffe;
echo $second_giraffe;

echo 'Today I met ' . $first_giraffe;

echo $first_giraffe->nr_of_spots;
echo $first_giraffe->nr_of_legs;

$first_giraffe->surname = 'Polak';
echo $first_giraffe->surname;
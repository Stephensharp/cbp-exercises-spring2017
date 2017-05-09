<?php

$variable = 1;

function my_function($variable) {
    $variable++;
    $variable; // 2
    echo $variable;
}

echo $variable; // 1


$variable = 1;

function my_function_ref(& $variable) {
    $variable++; // 2
}

echo $variable; // 2

$my_var = 12;

$reference_to_my_var = & $my_var;

$reference_to_my_var++;

echo $my_var; // 13

$my_var = 12;

$copy_of_my_var = $my_var;

$copy_of_my_var++;

echo $my_var; // 12
echo $copy_of_my_var; // 13

function my_function_ref(& $variable = 123) {
    $variable++; // 124
}

my_function_ref($honza);

echo $honza; // 124
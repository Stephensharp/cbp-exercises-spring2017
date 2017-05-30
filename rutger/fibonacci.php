<?php

$fib1 = 0;
$fib2 = 1;
$fib = $fib1 + $fib2;
$fibs = [];

while($fib1 + $fib2 <= 10000)
{
    $fib = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $fib;

    $fibs[] = $fib;
}

echo join(', ', $fibs).'.';
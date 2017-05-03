<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Playground</title>
</head>
<body>


    <?php
$first_name = 'Jan';
$last_name = 'Polak';
$year_of_birth = 1982;
$height = 186;

    ?>
First name: <?php echo $first_name; ?><br>
Last name: <?php echo $last_name; ?><br>
YOB: <?php echo $year_of_birth; ?><br>
Height: <?php echo $height; ?> cm<br>

<?php
$first_name_as_integer = (integer)$first_name;
var_dump($first_name_as_integer);
$first_name_as_boolean = (boolean)$first_name;
var_dump($first_name_as_boolean);
$height_as_string = (string)$height;
var_dump($height_as_string);
?>

<?php

$my_var = 1;

$my_var += 3;
$my_var = $my_var + 3;

$my_var -= 3;
$my_var = $my_var - 3;

$my_var *= 3;

$my_var /= 3;

$my_var = 11;
$my_var % 5; // 1
$my_var %= 5;

$my_var = 'This is';
$my_var .= ' a string';
$my_var = $my_var . ' a string';
$my_var; // 'This is a string'

$greeting = 'Hello, ' . 'world!';
$greeting; // 'Hello, world!'

function celsius_to_fahrenheit($celsius)
{
    $fahrenheit = (9/5) * $celsius + 32;

    return $fahrenheit;
}

$fahrenheit = celsius_to_fahrenheit(36);
var_dump($fahrenheit);

$fahrenheit = celsius_to_fahrenheit(14);
var_dump($fahrenheit);

$fahrenheit = celsius_to_fahrenheit(100);
var_dump($fahrenheit);

// Celsius to Fahrenheit exercise
$celsius = 36;
$fahrenheit = (9/5) * $celsius + 32;
var_dump($fahrenheit);

function odd_or_even($number)
{
    $variable_is_odd = $number % 2;
    return $variable_is_odd ? 'odd' : 'even';
}

echo odd_or_even(7623);
echo '        ';
echo odd_or_even(4124);

// ternary operator exercise
$variable = 1;
$variable_is_odd = $variable % 2; // 1, so true
echo $variable_is_odd ? 'odd' : 'even'; // 'odd'

$variable = 4;
$variable_is_odd = $variable % 2; // 0, so false
echo $variable_is_odd ? 'odd' : 'even'; // 'even'

?>


<?php define('MY_OS', 'Windows 10'); ?>

My OS is <?php echo MY_OS; ?>
<br>
<br>

<?php
function print_variable_type($variable)
{
    echo 'The type of ' . $variable . ' is ' . gettype($variable) . '<br>';
}
?>

<?php print_variable_type('123'); ?>
<?php print_variable_type(123); ?>
<?php print_variable_type('123 Times Square'); ?>
<?php print_variable_type(12.3); ?>
<?php print_variable_type(true); ?>
<?php print_variable_type('true'); ?>

<?php

function dd($variable) {
    var_dump($variable);
    die();
}

?>
<?php var_dump(12.3); ?>
<?php var_dump([1, 2, 3]); ?>

<hr>

<?php

1 == 1; // true
1 === 1; // true - they are the same and of the same type (integer)
1 == true; // true - 1 gets cast to true, true == true
1 === true; // false - they are the same but not the same type
0 == 0; // true
0 === 0; // true
0 === false; // false
0 == ''; // true
0 == []; // true (empty array)
0 == [1]; // false
false == []; // true
false === ''; // false
false == null; // true
null === null; // true
null === false; // false
true === false; // false
gettype(true) === gettype(false); // true - 'boolean' === 'boolean'

!true; // == false
!false; // == true
!0; // true
!'something'; // false
!''; // true
(boolean)'something'; // true
!!'something'; // true - inefficient

true && true; // true
true && false; // false
false && false; // false
true || true; // true
true || false; // true
false || false; // false\
true && (false || true); // true

$height = 160;

if($height > 180) {
    echo 'tall';
} elseif($height == 180) {
    echo '180';
} elseif($height > 160) {
    echo 'average';
} elseif($height == 160) {
    echo '160';
} else {
    echo 'short';
}

?>

</body>
</html>

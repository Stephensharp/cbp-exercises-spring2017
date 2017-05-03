<?php
require_once 'var_show.php';

$fruit = [
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

var_show($fruit);

var_show($fruit_colors);

$cars_i_want = [];

var_show($cars_i_want);

$fruit['green_one'] = 'Pear';

$fruit[] = "Apple";
$fruit[] = "Orange";

$cars_i_want = [
    'Aston Martin',
    'Bugatti', 
    'Ferrari'
];
$cars_i_want[] = 'Lamborghini';
$cars_i_want[] = 'Maserati';

var_show($cars_i_want);

echo '<hr style="clear: both">';
echo 'For myself I would buy ' . $cars_i_want[1]. '.<br>';
echo 'For my spouse I would buy ' . $cars_i_want[3] . '.<br>';
$cars_i_want[4] = 'bicycle';
echo 'Each of my kids will get a ' .$cars_i_want[4]. '.<br>';

echo '<hr><h2>Foreach</h2>';

foreach($cars_i_want as $car) {

    echo $car;

}

foreach($cars_i_want as $index => $car) {

    echo $index; 
    echo $car;

}

echo '<ul>';
foreach($cars_i_want as $brand)
{
    echo '<li>' . $brand . '</li>';
}
echo '</ul>';

echo '<hr><h2>Colors</h2>';



$cars_i_want = [
    'aston' => 'Aston Martin',
    'bugatti' => 'Bugatti', 
    'ferrari' => 'Ferrari'
];
$cars_i_want['lamborghini'] = 'Lamborghini';
$cars_i_want['maserati'] = 'Maserati';

var_show($cars_i_want);

//echo $cars_i_want['lamborghini'];

$car_colors = [
    'aston' => 'Silver',
    'bugatti' => 'Black',
    'ferrari' => 'Red',
    'lamborghini' => 'Yellow',
    'maserati' => 'Blue'
];

asort($car_colors);

var_show($car_colors);

array_shift($cars_i_want);

foreach($cars_i_want as $index => $brand)
{
    echo $brand . ' is ' . $car_colors[$index] .'<br>';
}

$aston = [
    'brand' => 'Aston Martin',
    'color' => 'Silver',
    'kmph' => 220
];

$cars_i_want = [
    'aston' => $aston,
    'bugatti' => [
        'brand' => 'Bugatti',
        'color' => 'Black'
    ],
    'ferrari' => [
        'brand' => 'Ferrari',
        'color' => 'Red'
    ]
];

foreach($cars_i_want as $car)
{
    echo $car['brand'] . ' is ' . $car['color'] .'<br>';
}
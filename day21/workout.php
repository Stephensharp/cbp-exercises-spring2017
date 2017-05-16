<?php

$course_name = 'Coding bootcamp';

$my_name = 'Jan';

$result = 11-3;

$instructors = [
    'Jan',
    'Daniel',
    'Michael',
    'Jakub'
];

function greet_me()
{
    echo 'Good morning Prague!';
}

greet_me();

$my_greeting = 'Good morning ' . $my_name;

echo $my_greeting;

sort($instructors);

// 10.
foreach($instructors as $name)
{ 
    // 12.
    echo greet_someone($name) . '<br>';
}

// 11.
function greet_someone($name)
{
    return 'Good morning ' . $name;
}
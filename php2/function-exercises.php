<?php

function return_val($val)
{
    return $val;
}

function increased_val($val)
{
    return $val + 1;
}

function print_val($val)
{
    echo $val;
}

function add_two_values($first, $second)
{
    return $first + $second;
}

function increase_val(& $val)
{
    $val++;
}

$variable = 1;
increase_val($variable);
$variable; // == 2

function combine_two_strings($first, $second)
{
    return $first . $second;
}

echo combine_two_strings('My name is ', 'Joe'); // returns 'My name is Joe'

function combine_strings($first, $second = '', $third = '', $fourth = '')
{
    return $first . $second . $third . $fourth;
}

echo '<br>'.combine_strings('My name is'); // returns 'My name is'
echo '<br>'.combine_strings('My name is ', 'Joe'); // returns 'My name is Joe'
echo '<br>'.combine_strings('My name is ', 'Joe', ' Black'); // returns 'My name is Joe Black'
echo '<br>'.combine_strings('My name is ', 'Joe', ' Black', ', pleased to meet you'); // returns 'My name is Joe Black, pleased to meet you'

function create_h1($text)
{
    echo '<h1>' . $text . '</h1>';
}

create_h1('Headline of this page'); // prints '<h1>Headline of this page</h1>'

function create_message($content, $id)
{
    echo '<div class="message" id="' . $id . '">' . $content . '</div>';

    echo "<div class=\"message\" id=\"{$id}\">{$content}</div>";
}

create_message('An error message', 'error_1'); // prints '<div class="message" id="error_1">An error message</div>'

function bigger_value($first, $second)
{
    // ternary operator & max
    return $first == $second ? null : max($first, $second);

    // if condition, implied else and max
    if($first == $second)
    {
        return null;
    }
    return max($first, $second);

    // if condition
    if($first > $second)
    {
        return $first;
    }
    elseif($first < $second)
    {
        return $second;
    }
    else
    {
        return null;
    }
}

echo '<br>'.bigger_value(54, 12); // returns 54
echo '<br>'.bigger_value(12, 19); // returns 19
echo '<br>'.bigger_value(10, 10); // returns null

function convert_length($length, $unit)
{
    switch($unit)
    {
        case 'cm':
            return $length / 2.54;
            break;
        case 'in':
            return $length * 2.54;
            break;
    }
}

echo '<br>'.convert_length(10, "cm"); // returns 3.937007874015748 (approximately)
echo '<br>'.convert_length(10, "in"); // returns 25.4

function longer_string($first, $second, & $longer_length)
{
    $first_length = strlen($first); // get the length of the first argument
    $second_length = strlen($second); // get the length of the second argument

    if($second_length > $first_length) // if second is longer
    {
        $longer_length = $second_length;
        return $second;
    }
    else // if the first is longer or if they are equal, return the first
    {
        $longer_length = $first_length;
        return $first;
    }
}

$length = null;
echo  '<br>'.longer_string('Joe', 'Black', $length); // prints 'Black', returns 'Black'
// $length == 5
echo  '<br>'.$length;


function foo()
{
    // do something
    $args = func_get_args(); // 

    var_export($args);
}

foo('Im', 'really', 'hungry');
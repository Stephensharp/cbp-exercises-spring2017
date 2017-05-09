<?php

function divmod($number1, $number2, & $number3)
{
    $number3 = $number1 % $number2;

    return $number1 / $number2;
}

$result = divmod(12, 5, $modulus);

echo $result .'<br>';
echo $modulus;

echo '<hr>';


function create_paragraph($contents, $class = "paragraph", $id = "") {
    return '<p class="'.$class.'"'.($id?' id="'.$id.'"':'').'>'.$contents.'</p>';
}

echo create_paragraph('text inside paragraph');

echo create_paragraph('text inside paragraph', 'p_class');

echo create_paragraph('text inside paragraph', 'paragraph_class', 'paragraph_id');

echo create_paragraph('text inside paragraph', "paragraph", 'paragraph_id');

echo '<hr>';

function convert_weight($weight, $unit = 'kg')
{
    if($unit == 'kg')
    {
        return $weight * 2.20462262;
    }
    else
    {
        return $weight / 2.20462262;
        // return $weight * 0.45359237; // also possible
    }

    switch($unit)
    {
        case 'kg': 
            return $weight * 2.20462262;
            break;
        case 'lb': 
            return $weight / 2.20462262;
            break;
        default:
            die('Unknown unit!');
            break;
    }
}

echo convert_weight(1, 'kg').'<br>'; // 2.20462262
echo convert_weight(1, 'lb').'<br>'; // 0.45359237
echo convert_weight(1).'<br>'; // 2.20462262
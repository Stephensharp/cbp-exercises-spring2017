<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions</title>
</head>
<body>
    
<?php

define('MY_OS', 'Windows');
$my_os = 'OS X';
switch($my_os . ' OS') {
    case 'Windows':
        echo 'Edge';
        break;
    case 'Linux':
        echo 'Firefox';
        break;
    case 'OS X':
        echo 'Safari';
        break;
    default:
        echo 'Just use Chrome...';
        break;
}

if(MY_OS == 'Windows') {
    echo 'Edge';
} elseif(MY_OS == 'Linux') {
    echo 'Firefox';
} elseif(MY_OS == 'OS X') {
    echo 'Safari';
} else {
    echo 'Just use Chrome...';
}

?>

<h2>Logical operators</h2>

<?php

$age = 35;
$gender = 'male';
$employed = true;

if($age > 35)
{
    echo 'age is greater than 35';
}
if($employed)
{
    echo 'if employed';
}
if($age <= 18)
{
    echo 'age is not greater than 18';
}
if($age < 12 && $gender == 'female')
{
    echo 'age is lower than 12 and gender is female';
}
if($age >= 18 && !$employed)
{
    echo 'age is greater or equal to 18 and is not employed';
}
if($age >= 60 && $employed && $gender == 'female')
{
    echo 'age is greater or equal to 60, is employed and is a female';
}
if(($gender == 'male' && $age > 20) || 
    (!$employed && $gender == 'female' && $age > 25))
{
    echo '(someone) is a male above 20 or is an unemployed female above 25';
}

function test_some_condition() {
    // really demanding on the computer
    // grab 100 things from database
    // compare them
    // make cofee
    // return true or false
}
if(true OR test_some_condition()) // 2 > 1 will not get evaluated at all
{

}
$current_page = 'homepage';
if($current_page == 'administration' AND user_is_administrator()) // user_is_administrator() will not be run here
{

}

'word';
1;
true;
true OR true;
true;
$today = 'sunday';
$today == 'sunday' OR open_shop(); // if today is sunday, open_shop() will not run
if($today != 'sunday') {
    open_shop();
}
?>

</body>
</html>
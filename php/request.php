<?php

function vdump($variable)
{
    echo nl2br(var_export($variable, true));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>

    <style>
    body {
        color: red;
    }
    </style>
</head>
<body>
    
 <?php vdump($_GET); ?>
 <br>
 <?php vdump($_POST); ?>
<br>
 <?php //vdump($_SERVER); ?>

<h1>Hello, <?php //echo $_GET['name']; ?> !</h1>

<?php //vdump(parse_url($_SERVER['REQUEST_URI'])); ?>

<?php

// prepare an array of data
$array_of_data = [
    'name' => 'Jan Polak',
    'day' => 'Wednesday'
];

// turn the array into a query string
$qs = http_build_query($array_of_data);

echo $qs;

?>

<nav>
    <a href="?">Home</a>
    <a href="?page=form">Forms</a>
    <a href="?page=contact">contact</a>
</nav>

<?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
    <?php include('forms.php'); ?>
<?php elseif(isset($_GET['page']) && $_GET['page']=='contact') : ?>
    This is the contact form.
<?php else : ?>
    This is home.
<?php endif; ?>

</body>
</html>

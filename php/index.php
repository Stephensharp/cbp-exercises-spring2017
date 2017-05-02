<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo 'PHP'; ?></title>
</head>
<body>

    <?php


        echo '123<h1>A greeting</h1>';
       
    ?>
    
    <h2>
        <?php
$greeting = 'Hello to the world!'; 
// now I have a $greeting variable declared and initialized with a value
        ?>
<?php // unset($greeting); ?>
        <?php echo $greeting; ?>

        <?= 'Hello again.' ?>
    </h2>

    <?php require_once 'functions.php'; ?>
    <?php include 'footer.php'; ?>

</body>
</html>
<?php

ob_start();

echo 'An error happened';

// ob_get_clean - end buffering, clean buffer, return the contents of buffer
$what_happened_meanwhile = ob_get_clean();

// prepare the navigation
ob_start();

save_smth_in_db();

?>
<nav>
    <a href="#">Link</a>
    <a href="#">Link</a>
    <a href="#">Link</a>
</nav>
<?php

$navigation = ob_get_clean();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Output buffering</title>
</head>
<body>

    <?php echo $navigation; ?>

    This is within the body of the document.

    <?php echo $what_happened_meanwhile; ?>
    
</body>
</html>

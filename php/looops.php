<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h2>While</h2>
<?php

$time_served = 0;

while($time_served < 10) {
    $time_served++;
    // $time_served += 1;
    // $time_served = $time_served + 1;
    echo 'The prisoner has served ' . $time_served .' years<br>';
}

?>

<h2>Do ... while</h2>
<?php

$time_served = 0;

do {
    $time_served++;
    echo 'The prisoner has served ' . $time_served .' years<br>';
} while($time_served < 10);

?>

<h2>For</h2>
<?php

for($i = 0; $i < 5; $i++) {
    echo 'The prisoner has ' . (5-$i) . ' more years to serve.<br>';
}

?>

<h2>For with break & continue</h2>
<?php 

for($i = 10; $i >= 0; $i--) {
    echo 'The prisoner has ' . $i . ' more years to serve.<br>';

    if($i > 5) // if he has more than 5 years to go
    {
        continue; // dont run the code under (dont go to parole hearing)
    }

    echo 'Going to a parole hearing...<br>';
    
    if($i == 2)
    {
        echo 'Paroled!';
        break;
    }

    echo 'Parole denied.<br>';
}

?>

</body>
</html>
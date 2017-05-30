<?php

$value = 0;

if($_POST)
{
    $value = $_POST['temperature'];

    if(isset($_POST['celsius']))
    {
        $value =  ($value - 32) * 5/9 ;

    }
    else
    {
        $value = $value * 9/5 + 32;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperature convertor</title>
</head>
<body>
    
    <form action="" method="post">

        <h1>Calculate the temperature</h1>

        Please enter the temperature: <input type="text" name="temperature" value="<?php echo htmlspecialchars($value); ?>"><br>
        <br>
        <input type="submit" name="celsius" value="celsius">
        <input type="submit" name="fahrenheit" value="fahrenheit"><br>
        <input type="reset" name="reset">

    </form>



</body>
</html>
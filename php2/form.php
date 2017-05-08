<?php
    $product = [
        'name' => 'unknown',
        'description' => 'unknown',
        'price' => 'unknown',
        'category' => 'Shoes',
        'in_stock' => 89
    ];

    if($_POST)
    {
        $product = array_merge($product, [
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
        ]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

    <h1><?php echo $product['name']; ?></h1>

    <div class="category">Category: <?php echo $product['category']; ?></div>

    <div class="stock">In stock: <?php echo $product['in_stock']; ?></div>

    <div class="price"><?php echo $product['price']; ?></div>

    <p><?php echo $product['description']; ?></p>
    
    <form action="" method="post">

        Product name:<br>
        <input type="text" value="" name="name" /><br>
        <br>
        Description:<br>
        <input type="text" value="" name="description" /><br>
        <br>
        Price:<br>
        <input type="text" value="" name="price" /><br>
        <br>
        <input type="submit" value="save" />
    </form>

</body>
</html>
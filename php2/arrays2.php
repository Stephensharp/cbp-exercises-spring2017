<?php

$messages = [
  'error' => [
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ],
  'warning' => [
    'This is your first warning',
    'This is your final warning'
  ],
  'success' => [
    'Finally, something was successful.'
  ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays 2</title>

    <link rel="stylesheet" href="messages.css">
</head>
<body>

    <div class="messages"> <!-- wrapper (not required) -->
        <?php foreach($messages as $type => $messages_of_type) : ?>

            <?php foreach($messages_of_type as $message) : ?>
                
                <div class="message <?php echo $type; ?>"><?php echo $message; ?></div>
            
            <?php endforeach; ?>
    
        <?php endforeach; ?>
    <div>
    
</body>
</html>
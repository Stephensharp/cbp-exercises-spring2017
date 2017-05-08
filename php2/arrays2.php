<?php

// function 1 generated these messages
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

function do_something_risky() {
  // do the risky stuff

  // return new messages
  return [
    'error' => [
      'I knew this would happen!',
      'This always happens.'
    ],
    'warning' => [
      'You should fix this before proceeding'
    ],
    'success' => []
  ];
}

// let's try it
$new_messages = do_something_risky();

$all_messages = array_merge($messages, $new_messages);

$array1 = [
    'blue' => 'sky',
    'red' => 'flower',
    'yellow' => 'banana'
];

$array2 = [
    'green' => 'grass',
    'orange' => 'orange',
    'yellow' => 'submarine',
    'red' => 'shoes'
];

$result = array_merge($array1, $array2);
var_dump($result); die();

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
        <?php foreach($all_messages as $type => $messages_of_type) : ?>

            <?php foreach($messages_of_type as $message) : ?>
                
                <div class="message <?php echo $type; ?>"><?php echo $message; ?></div>
            
            <?php endforeach; ?>
    
        <?php endforeach; ?>
    <div>
    
</body>
</html>
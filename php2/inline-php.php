<?php
    // logic & code to retrieve and prepare the data
    // calculations, operations that can produce errors ...
    // also handle form submission, saving data to database etc.

    // find out if the user is admin
    $user_is_admin = false; // the user is not an admin

    // prepare data for output
    $names = ['Bruce Wayne', 'Clark Kent', 'Tony Stark', 'Peter Parker'];

    $vehicles = [
        'Bicycle' => 40,
        'Car' => 150,
        'Train' => 110,
        'Horse' => 45
    ];

    $messages = [
        'Preparing to do some stuff...',
        'Doing amazing stuff...',
        'Stuff is done.'
    ];
    $messages = [];

    $board = [];
    for($i = 0; $i < 8; $i++)
    {
        // add a row
        $board[$i] = []; // ie. add a new empty array into the $board array

        for($j = 0; $j < 8; $j++)
        {
            // decide if it is white or black
            if($j % 2 == $i % 2)
            {
                $color = 'white';
            }
            else
            {
                $color = 'black';
            }
            
            // add a square
            $board[$i][] = $color;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inline PHP</title>

    <style>
.board .row {
    overflow: hidden;
}
.board .row > div {
    float: left;
    width: 3em;
    height: 3em;
}
.board .black {
    background-color: #000000;
}
    </style>
</head>
<body>

    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>

        <?php if($user_is_admin) : ?>

            <li><a href="#">Link just for administrators</a></li>
            <li><a href="#">Another link just for administrators</a></li>

        <?php endif; ?>
       
    </ul>

    <?php foreach($names as $nr => $name) : ?>

        <div class="name">
            <?php echo ($nr+1) . '. ' . $name; ?>
        </div>

    <?php endforeach; ?>

    <table>
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
        <tr>

        <?php foreach($vehicles as $vehicle_name => $top_speed) : ?>

            <tr>
                <td><?php echo $vehicle_name; ?></td>
                <td><?= $top_speed; ?></td>
            </tr>
            
        <?php endforeach; ?>
    </table>

    <?php if($messages) : ?>

        <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">

            <?php foreach($messages as $message) : ?>
                <li><?php echo $message; ?></li>
            <?php endforeach; ?>

        </ul>
        
    <?php elseif($user_is_admin) : ?>
        
        <div class="message">Nothing to report, my master.</div>

    <?php else : ?>

        <div class="message">Nothing to report.</div>

    <?php endif; ?>

    <div class="board">

        <?php for($i = 0; $i < 8; $i++) : ?>

            <div class="row" style="height: 3em; width: 24em; border: 1px solid #c7c7c7">

                <?php for($j = 0; $j < 8; $j++) : ?>

                    <?php if($j % 2 == $i % 2) : ?>
                        <div class="white"></div>
                    <?php else : ?>
                        <div class="black"></div>
                    <?php endif; ?>
                    
                <?php endfor; ?>

            </div>
            
        <?php endfor; ?>

    </div>

    <br>
    <br>
    <?php $white = false; ?>
    <div class="board">

        <?php for($i = 0; $i < 8; $i++) : ?>
            <?php $white = !$white; ?>
            <div class="row" style="height: 3em; width: 24em; border: 1px solid #c7c7c7">

                <?php for($j = 0; $j < 8; $j++) : ?>

                    <?php if($white) : ?>
                        <div class="white"></div>
                    <?php else : ?>
                        <div class="black"></div>
                    <?php endif; ?>
                    
                    <?php $white = !$white; ?>
                <?php endfor; ?>

            </div>
            
        <?php endfor; ?>

    </div>
<br>
    <br>
    <div class="board">

        <?php foreach($board as $row) : ?>

            <div class="row" style="height: 3em; width: 24em; border: 1px solid #c7c7c7">

                <?php foreach($row as $square) : ?>

                    <?php if($square == 'white') : ?>
                        <div class="white"></div>
                    <?php else : ?>
                        <div class="black"></div>
                    <?php endif; ?>
                    
                <?php endforeach; ?>

            </div>
            
        <?php endforeach; ?>

    </div>
    
</body>
</html>
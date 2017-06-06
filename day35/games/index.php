<?php

require_once 'database.php';
require_once 'game.php';
require_once 'genre.php';

$games = game::getAllGames();

$game_ids = [];
foreach($games as $game)
{
    $game_ids[] = $game->id;
}

$genres = genre::getGenresForGames($game_ids);

var_dump($games);

var_dump($genres);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of games</title>
</head>
<body>
    
    <?php foreach($games as $game) : ?>

        <div class="game">
            <div class="image">
                <img src="<?php echo $game->image_url; ?>" />
            </div>
            <div class="info">
                <h2 class="name"><?php echo $game->name; ?></h2>
                <div class="release">Released at: <?php echo $game->getReadableReleasedAt(); ?></div>
                <div class="genres">

                    <?php foreach($genres[$game->id] as $genre) : ?>
                        <a href="#"><?php echo $genre->name; ?></a>
                    <?php endforeach; ?>
                    
                </div>
                <div class="description">
                    <?php echo $game->description; ?>
                </div>
                <div class="rating"><?php echo $game->rating; ?>%</div>        
            </div>
        </div>

    <?php endforeach; ?>

</body>
</html>
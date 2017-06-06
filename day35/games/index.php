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
                <div class="release">Released at: <?php echo $game->released_at; ?></div>
                <div class="genres">
                    <a href="#">Sci-fi</a>
                    <a href="#">Fantasy</a>
                </div>
                <div class="description">
                    For Honor is a competitive third-person melee title which mixes speed, strategy and team play with close range combat. The Chosen has survived a thousand years of wandering the southern deserts. Their journey should have wiped them out hundreds of years ago, but they survived thanks to the skill set and focus of their heroes. These individuals hoe to lead their followers to an improbable victory and to establish a new homeland. Striking fear in their enemies, The Warborn warriors sail across the Boiling Sea to raid the southern coast. Known for their fire and passion, they will seek to drive their enemies out of their ancestral lands. On the shoulders of great heroes, The Legions have driven out invaders, conquered any who wouldn\'t join them, and established hundreds of others to defend what is theirs. Facing invasion on two fronts, these heroes fight to protect their lands form the heathens who would take it.
                </div>
                <div class="rating">77%</div>        
            </div>
        </div>

    <?php endforeach; ?>

</body>
</html>
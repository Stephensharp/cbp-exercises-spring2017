<?php 

$movies = [
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
];

sort($movies);

$movie_names = [
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
];
asort($movie_names);
$movie_ratings = [
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
];

isset($_GET['order']); // returns true if 'order' is within GET params

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_REQUEST);

// if there is 'order' in the GET parameters and it is equal to 'desc'
if(isset($_REQUEST['order']) && $_REQUEST['order'] == 'desc')
{
    arsort($movie_ratings);
    $order = 'desc';
}
else // default
{
    asort($movie_ratings);
    $order = 'asc';
}

$films = [];
foreach($movie_names as $movie_id => $name)
{
    $films[$movie_id] = [
        'name' => $name,
        'rating' => $movie_ratings[$movie_id]
    ];
}

function compare_films($film1, $film2)
{
    // a movie is less than another movie when it has lower rating
    if($film1['rating'] < $film2['rating'] 
        // or if they have the same rating and the name is less (in alphabet)
        // than the second one's name
        || ($film1['rating'] == $film2['rating'] && $film1['name'] < $film2['name']))
    {
        return -1;
    }
    // when both ratings and names are equal
    elseif($film1['rating'] == $film2['rating'] && $film1['name'] == $film2['name'])
    {
        return 0;
    }
    else
    {
        return 1;
    }
}

uasort($films, 'compare_films');

// var_dump($films);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

    <h2>Movies</h2>
    <ol>
        <?php foreach($movies as $title) : ?>
        
            <li><?php echo $title; ?></li>

        <?php endforeach; ?>
    </ol>

    In this array there are <?php echo count($movies); ?> items.

    <ol>
        <?php for($i = 0; $i < count($movies); $i++) : ?>

            <li><?php echo $movies[$i]; ?></li>

        <?php endfor; ?>
    </ol>

    <h2>Movies with ratings</h2>

    <ol>
        <?php foreach($movie_names as $movie_id => $title) : ?>

            <li><?php echo $title; ?> (<?php echo $movie_ratings[$movie_id]; ?>)</li>

        <?php endforeach; ?>
    </ol>

    <h2>Sorted by ratings</h2>
    <a href="?order=desc">descending</a>
    <a href="?order=asc">ascending</a>

    <form action="" method="get">
        <input type="submit" name="order" value="desc" />
        <input type="submit" name="order" value="asc" />
    </form>

    <form action="" method="get">
        <input type="radio" name="order" value="desc" <?php if($order == 'desc') echo 'checked'; ?> /> descending
        <input type="radio" name="order" value="asc" <?php if($order == 'asc') echo 'checked'; ?> /> ascending
        <input type="submit" value="Choose!" />
    </form>

    <form action="" method="get">
        <select name="order">
            <option value="desc" <?php if($order == 'desc') echo 'selected'; ?>>descending</option>
            <option value="asc" <?php if($order == 'asc') echo 'selected'; ?>>ascending</option>
        </select>
        <input type="submit" value="Choose!" />
    </form>

    <form action="" method="post">
        <input type="submit" name="order" value="desc" />
        <input type="submit" name="order" value="asc" />
    </form>

    <ol>
        <?php foreach($movie_ratings as $movie_id => $rating) : ?>

            <li><?php echo $movie_names[$movie_id]; ?> (<?php echo $rating; ?>)</li>

        <?php endforeach; ?>
    </ol>

    <h2>Films array</h2>
    <ol>
        <?php foreach($films as $movie_id => $film) : ?>

            <li><?php echo $film['name']; ?> (<?php echo $film['rating']; ?>)</li>

        <?php endforeach; ?>
    </ol>

</body>
</html>
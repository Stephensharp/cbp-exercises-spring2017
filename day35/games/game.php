<?php

class game
{
    // add properties based on the db structure
    public $id = null;
    public $name = null;
    public $image_url = null;
    public $description = null;
    public $rating = null;
    public $released_at = null;

    public static function getAllGames()
    {
        // connect to the db
        // database class does that for us

        // prepare the query string
        $query = "
            SELECT *
            FROM `game`
        ";

        // run the query -> get a statement
        $statement = database::query($query);

        // tell PDO to fetch objects of class game instead of 
        //   associative arrays
        $statement->setFetchMode(PDO::FETCH_CLASS, 'game');

        // fetch an array of specified objects
        $games = $statement->fetchAll();

        return $games;

        // // from the statement *fetch* the results
        // $results = $statement->fetchAll();

        // // prepare an empty array
        // $games = [];

        // // from each fetched result create an object of class game
        // foreach($results as $game_array)
        // {
        //     $game = new game();

        //     // fill it with the selected data
        //     $game->id =          $game_array['id'];
        //     $game->name =        $game_array['name'];
        //     $game->image_url =   $game_array['image_url'];
        //     $game->description = $game_array['description'];
        //     $game->rating =      $game_array['rating'];
        //     $game->released_at = $game_array['released_at'];

        //     // put each created object into the array
        //     $games[] = $game;
        // }

        // // return the array
        // return $games;
    }

    public function getReadableReleasedAt()
    {
        $nice_format = 'j. n. Y';

        $time = strtotime($this->released_at);

        return date($nice_format, $time);

    }
}
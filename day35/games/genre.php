<?php


class genre
{
    public $id = null;
    public $name = null;


    public static function getGenresForGames($game_ids)
    {
        // create the sql string for IN out of the ids
        $game_ids_string = join(',', $game_ids);

        // prepare the query string
        $query = "
            SELECT *
            FROM `genre`
            RIGHT JOIN `game_has_genre`
              ON `game_has_genre`.`genre_id` = `genre`.`id`
            WHERE `game_has_genre`.`game_id` IN (".$game_ids_string.") 
        ";
        
        /*
        "
            SELECT `genre`.*
            FROM `genre`
            RIGHT JOIN `game_has_genre`
              ON `game_has_genre`.`genre_id` = `genre`.`id`
            WHERE `game_has_genre`.`game_id` IN (1, 2, 3) 
        "
        */

        // run the query -> get a statement
        $statement = database::query($query);

        // tell PDO to fetch objects of class genre instead of 
        //   associative arrays
        $statement->setFetchMode(PDO::FETCH_CLASS, 'genre');

        // fetch an array of specified objects
        $all_genres = $statement->fetchAll();

        // build an array of genres indexed by game ids
        $genres_for_games = [];

        foreach($all_genres as $genre)
        {
            $genres_for_games[$genre->game_id][] = $genre;
        }

        return $genres_for_games;
    }
}
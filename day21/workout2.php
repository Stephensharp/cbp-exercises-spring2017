<?php

// 1.
$movie_name = 'Arrival';

// 2., 6.
$ratings = [
    'user642' => 69, 
    'user214' => 95, 
    'user013' => 82
];

// 8.
$user_names = [
    'user642' => 'Bob', 
    'user214' => 'Stuart', 
    'user013' => 'Kevin'
];

// 8. 
$user_name = $user_names['user214'];

// 3., 7.
foreach($ratings as $user_id => $rating)
{
    echo get_username($user_id) . ' gave the movie a ' . $rating . ' % rating<br>';
}

// 9.
/**
 * gets a username by the user's id
 *
 * looks for the username in the global variable $user_names
 * does not handle the case of username not existing
 * @param string $user_id - the id of the user 
 * @return string - username of the user 
 */
function get_username($user_id)
{
    global $user_names; // include the variable $user_names 
                        // from the global scope into this
                        // function's scope

    return $user_names[$user_id]; // returns an item from the
                                  // array $user_names with
                                  // the given key
}

// 4.
/**
 * prints rating with percents
 * 
 * @param integer $rating - rating of a movie
 * @param string $sign - sign to be added to the rating
 * @return string - rating with space and $sign
 */
function print_rating($rating, $sign = '%')
{
    // 5.
    echo $rating . ' ' . $sign;
}


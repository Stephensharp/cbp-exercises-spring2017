<?php

// 1.
$user_id = 4;

// 2.
session_start();

// 3.
var_dump($_SESSION);

// 4., 5.
//$_SESSION['user_id'] = $user_id;

// 6.
$username = 'jp';

// 7.
$user = [
    'user_id' => $user_id,
    'username' => $username
];

// 8.
class Auth
{
    protected static $users = [];

    // 9.
    public static function addUser($user)
    {
        static::$users[] = $user;
    }

    // 10.
    public static function getUsers()
    {
        return static::$users;
    }

    protected static function getCurrentUserId()
    {
        // 14.
        return !empty($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
        
        // return above, code never gets here
        if(!empty($_SESSION['user_id']))
        {
            return $_SESSION['user_id'];
        }
        else
        {
            return null;
        }
    }

    // 15.
    public static function getCurrentUser()
    {
        // 16.
        $user_id = static::getCurrentUserId();

        // 17.
        foreach(static::$users as $user)
        {
            // 18.
            if($user_id == $user['user_id'])
            {
                return $user;
            }
        }

        return null;
    }
}

Auth::addUser([
    'user_id' => 1, 
    'username' => 'Kevin'
]);
Auth::addUser(['user_id' => 2, 'username' => 'Stuart']);
Auth::addUser(array('user_id' => 3, 'username' => 'Bob'));

Auth::addUser($user); 

var_dump(Auth::getUsers());

// 20.
$current_user = Auth::getCurrentUser();

var_dump($current_user);


function foo()
{
    // the function calls itself
    //foo();
}

// calll the function
foo();
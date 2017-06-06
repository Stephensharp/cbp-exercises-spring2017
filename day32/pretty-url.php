<?php

// echo 'Pretty URL';

//echo $_SERVER['REQUEST_URI'];

$uri = trim($_SERVER['REQUEST_URI'], '/');
echo $uri;

$parts_of_url = explode('/', $uri);
var_dump($parts_of_url);

if($parts_of_url[1] == 'interfaces')
{
    include 'interfaces.php';
}
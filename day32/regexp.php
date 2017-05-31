<?php

$string = 'AA$AA';

$regexp = 'a{4}';

$result = preg_match('#^a{2}\$a{2}$#i', $string);
var_dump($result);

$email = 'jan.polak@data4you.cz';
$result = preg_match('#^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9_\-\.]+\.[a-zA-Z]+$#i', $email);
var_dump($result);

$username = 'JanPolak';

if(preg_match('#\s#', $username))
{
    die('NO WHITESPACE ALLOWED!');
}

$telephone_number = '+776221952';

if(preg_match('#\s#', $telephone_number))
{
    die('NO WHITESPACE ALLOWED!');
}
if(!preg_match('#^[\d\+]{9,10}$#', $telephone_number))
{
    die('ONLY NUMBERS ALLOWED!');
}

'\w';
'[a-zA-Z0-9_]';

$result = preg_match('#^.*$#i', 'a#9.', $matches);
var_dump($result);
var_dump($matches);

$html = '<h1 class="main">Headline of the page</h1>';
preg_match('#<h1 class="(.*?)">(.*?)</h1>#imu', $html, $matches);
var_dump($matches);

echo $matches[1];
OBJECTS ARE ALWAYS PASSED BY REFERENCE

<?php

function something($object)
{
    $object = clone($object);
    
    $object->name = 'Changed';
}

$dog = new dog();

something($dog);

echo $dog->name; // 'Changed'

$copy_of_dog = clone($dog);
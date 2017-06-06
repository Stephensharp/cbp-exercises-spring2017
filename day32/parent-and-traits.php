<?php

class entity
{
    public $is_ethereal = false;
}

class animal extends entity
{
    public $is_mammal = true;
}

class dog extends animal
{
    public $food_in_stomach = [];

    public function eat()
    {
        $this->food_in_stomach[] = 'meat';
    }
}

trait eats_veggies
{
    public $can_eat_veggies = true;
}

class vegan_dog extends dog
{
    use eats_veggies;

    public function eat()
    {
        $this->food_in_stomach[] = 'veggies';
    }
}

trait runs_away
{
    public function run_away()
    {
        echo 'It is gone!';
    }
}

class beagle extends dog
{
    use runs_away, eats_veggies;

    public $can_eat_veggies = false;

    public function eat()
    {
        $this->food_in_stomach[] = 'shoes';

        parent::eat();
    }
}

$some_dog = new vegan_dog();
$some_dog->eat();

$beagle = new beagle();
$beagle->eat();
$beagle->run_away();
<?php

class giraffe
{
    public $name = null;
    public $location = null;
    public $is_hungry = true;
    public $is_thirsty = true;

    public static $list_of_giraffes = [];

    public static function getNrOfGiraffes()
    {
        // use the $list_of_giraffes instead
        return count(static::$list_of_giraffes);
    }

    // returns the number of giraffes that are now in the forest
    public static function getNrOfGiraffesInForest()
    {
        // number of giraffes found in forest is 0
        $nr_of_gs_in_f = 0;

        // for each giraffe in the list of giraffes
        foreach(static::$list_of_giraffes as $giraffe_object)
        {
            // if this giraffe is in forest
            if($giraffe_object->location == 'forest')
            {
                // raise the number of giraffes found in forest by 1
                $nr_of_gs_in_f++;
            //
            }

        //
        }
        
        // return the number of giraffes found in forest
        return $nr_of_gs_in_f;
    }

    public function __construct($name, $location = 'forest')
    {
        // a giraffe is born
        $this->name = $name; // it is given a name
        $this->location = $location; // it's location is set
        
        // add the giraffe to the list of giraffes
        static::$list_of_giraffes[] = $this;
    }

    public function __toString()
    {
        return $this->name . ' that lives in the '. $this->location;
    }

    protected $other_values = [
        'nr_of_spots' => 25,
        'nr_of_legs' => 4,
        'surname' => 'Trump'
    ];

    public function __get($name)
    {
        return $this->other_values[$name];
    }

    public function __set($name, $value)
    {
        echo 'Trying to set the value of property ' . $name;
    }

    public function eat()
    {
        $this->is_hungry = false;
    }

    public function drink()
    {
        $this->is_thirsty = false;
    }

    public function sleep()
    {
        $this->is_hungry = true;
        $this->is_thirsty = true;
    }

    public function goTo($location)
    {
        $this->location = $location;
    }
}
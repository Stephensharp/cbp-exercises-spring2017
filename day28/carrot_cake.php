<?php

class carrot_cake
{
    public static $total_carrots_used = 0;
    public static $last_cake_baked_at = null;

    public $type_of_flour = null;
    public $type_of_sugar = null;
    public $topping = null;
    public $size = null;
    public $baked_at = null;

    public function __construct($flour = 'wheat', $sugar = 'brown', $topping = null, $size = '30cm')
    {
        // chop the carrots
        static::$total_carrots_used += 15;

        // mix everything together
        $this->type_of_flour = $flour;
        $this->type_of_sugar = $sugar;
        $this->topping = $topping;
        $this->size = $size;

        // do some black magic (= baking)

        // voila - a carrot cake
        $this->baked_at = time();
        
        static::$last_cake_baked_at = time();
    }
}
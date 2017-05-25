<?php

// 1.
$name = 'James';

// 2.
//$name = $name . ' Bond';
$name .= ' Bond';

// 3.
$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

// 4.
echo 'The name is '.$bond_info['last_name'].'. '.$bond_info['first_name'].' '.$bond_info['last_name'].'.';

echo 'The name is '
    .$bond_info['last_name']
    .'. '
    .$bond_info['first_name']
    .' '
    .$bond_info['last_name']
    .'.';

// join
// echo join('|', ['first', 'second']); // first|second

// 5.
echo 'One day when I was driving my '.$bond_info['car'].' in the Alps '.$bond_info['enemy'].' came along and made me a '.$bond_info['relationship_status'].'. If only I had my '.$bond_info['gun'].' with me!';

// echo "first line\nsecondline\nthirdline";

// 6.
$bond_info['last_case'] = 'Spectre';

// 7.
class bondCase
{
    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    // 10.
    protected $girls = [];
    // think of properties as an array
    // [
    //     name => null,
    //     year => null,
    //     enemy => null,
    //     girls = []
    // ]

    // 16.
    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    public static function getAvgGirlsPerCase()
    {
        return static::$girls_met / static::$cases_solved;
    }

    // 9.
    // purpose: to set the year of the case when it is being created
    public function __construct($year)
    {
        $this->year = $year;

        // 17.
        static::$cases_solved++;
    }

    // 11.
    public function addGirl($name)
    {
        $this->girls[] = $name;

        // 18.
        static::$girls_met++;
    }

    // 8.
    // purpose: to set the name of the case
    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($value)
    {
        $this->year = $value;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }

    // purpose: to set the enemy for this case
    public function setEnemy($value)
    {
        $this->enemy = $value;
    }
}

// 12.
// create an object
$case = new bondCase(2015);
// set it's year
// $case->setYear('2015');
// set it's name
$case->setName('Spectre');
// set it's enemy
$case->setEnemy('Ernst Stavro Blofeld');

// 13.
$case->addGirl('Estrella');
$case->addGirl('Lucia Sciarra');
$case->addGirl('Madeleine Swann');

// 14.
$new_case = new bondCase(2006);
$new_case->setName('Casino Royale');
$new_case->setEnemy('Le Chiffre');

// 15.
$new_case->addGirl('Vesper Lynd');
$new_case->addGirl('Solange Dimitrios');

var_dump($case);
var_dump($new_case);

// var_dump(bondCase::$cases_solved);

echo 'On average Bond has met ' . bondCase::getAvgGirlsPerCase() . ' girls per case.';
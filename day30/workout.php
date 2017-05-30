<?php

// 1.
$decimal = 12.6666;

// 2.
$country_names = [
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
];

// 3.
$this_country = $country_names['cz'];

// 4.
$country_gdp = [
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
];

// 5.
$money = 123456789000000;

var_dump($money);

// 6. 
echo 'The amount is ' . $money . ' USD<br>';

// 7. 
echo 'The amount is ' . $money/1000 . ' thousand USD<br>';

// 7b. 
echo 'The amount is ' . $money/1000000 . ' million USD<br>';

// 8.
echo 'The amount is ' . $money/1000000000 . ' billion USD<br>';

// 9.
echo 'The amount is close to ' . round($money/1000000000000) . ' trillion USD<br>';

// 11.
echo 'The amount is above ' . floor($money/1000000000) . ' billion USD<br>';

// 12.
echo 'The amount is under ' . ceil($money/1000000000) . ' billion USD<br>';

// 13.
foreach($country_names as $country_code => $country_name)
{
    $one_country_gdp = $country_gdp[$country_code];

    $one_country_gdp_in_bns = $one_country_gdp/1000000000;
    echo '<li>Nominal GDP value of '.$country_name.' is $ '. $one_country_gdp_in_bns.' billion</li>';
}

// 14.
class country
{
    // 15.
    protected $name = null;
    protected $gdp = null;

    // 16.
    public function __construct($name, $gdp)
    {
        $this->name = $name;
        $this->gdp = $gdp;
    }

    // 17.
    public function getName()
    {
        return $this->name;
    }

    // 18.
    public function getGdp()
    {
        return round($this->gdp / 1000000000);
    }
}

// 19.
$countries = [];

// 20.
// for each country create a country object
foreach($country_names as $country_code => $country_name)
{
    $one_country_gdp = $country_gdp[$country_code];

    $country = new country($country_name, $one_country_gdp);
    $countries[] = $country;
}

// 21.
foreach($countries as $country)
{
    // 22.
    echo '<li>Nominal GDP value of '.$country->getName().' is $ '.$country->getGdp().' billion</li>';
}
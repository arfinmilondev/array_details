<?php

/*
Associative Array stores Key and a value 
*/

$vegitablePrice = [
    'potato' => '50',
    'onion' => '80',
    'chili' => '400',
    'Egges' => '180',
    'Carot' => '80'
];

echo '<pre>';
print_r($vegitablePrice);
echo '</pre>';

//accessing egges price

echo $vegitablePrice["Egges"];

// foreach loop 

foreach ($vegitablePrice as $name => $price) {
    echo " The price of $name is $price BDT." . PHP_EOL;
}



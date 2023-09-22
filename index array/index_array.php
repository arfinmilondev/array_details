<?php

/*
PHP Index Array is repesented by number which starts from 0. We can store number,string and object in the PHP Array.All PHP array elements are assigned ti an Index number by Default.
*/


$index_array = array("arfin", "milon", "Afsana", "Dhaka", "Dinajpur");

echo '<pre>';
print_r($index_array);
echo '</pre>';

echo $index_array[1];

// For each loop over index array

$cities = ['Dhaka', 'Dinajpur', 'Rjshali', 'Khulna', 'Shylet'];

echo '<pre>';
print_r($city);
echo '</pre>';

foreach ($cities as $city) {
    echo "your home town is: $city" . "\n";
}

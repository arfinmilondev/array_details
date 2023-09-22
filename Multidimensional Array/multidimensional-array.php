<?php

/*
MutiDimensional Array is also known asa array of arrays
*/

$employee = [
    [1, 'milon', 'salary 30000 '],
    [2, 'karim', 'salary 20000 '],
    [3, 'rahim', 'salary 30000 '],
    [4, 'shakil', 'salary 40000 '],
    [5, 'pintu', 'salary 20000 ']

];

print_r($employee);

//accessing rahim's salary
$rahimSalary = $employee[3][2];
echo "Rahim has recieved $rahimSalary BDT";

// Foreach Loop in multidimensional associative array

foreach ($employee as $singleEmploye) {
    echo "$singleEmploye[1] has recieved $singleEmploye[2] BDT" . "\n";

    foreach ($singleEmploye as $information) {
        echo $information . "\n";
    }
}


// echo '<pre>';
// print_r($information);
// echo '</pre>';

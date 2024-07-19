<?php
$numbers = array(2, 5, 7, 8, 1, 3, 10);

$parNumbers = array();
$impaNumbers = array();

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $parNumbers[] = $number;
    } else {
        $impaNumbers[] = $number;
    }
}

echo "Números pares: ";
print_r($parNumbers);

echo "Números ímpares: ";
print_r($impaNumbers);
?>

<?php

$array = array();


for ($i = 0; $i < 30; $i++) {
    $array[] = rand(1, 20);
}


echo "array: ";
foreach ($array as $value) {
    echo $value . " ";
}
echo "\n";

//..........................
$sum = 0;
foreach ($array as $value) {
    $sum += $value;
}
echo "sum : " . $sum;
echo "\n";

// ..........................
$product = 1;
foreach ($array as $value) {
    $product *= $value;
}
echo "multiplication result: " . $product;
echo "\n";

//.............................
$countOf5 = 0;
foreach ($array as $value) {
    if ($value == 5) {
        $countOf5++;
    }
}
echo "count of five: " . $countOf5;
echo "\n";

//.............................
echo "numbers divide on 3: ";
foreach ($array as $value) {
    if ($value % 3 == 0) {
        echo $value . " ";
    }
}

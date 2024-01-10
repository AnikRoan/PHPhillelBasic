<?php


$array = array();
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(1, 100);
}


echo "begin array: ";
print_r($array);
echo "\n";


$minElement = $array[0];
$maxElement = $array[0];

foreach ($array as $value) {
    if ($value < $minElement) {
        $minElement = $value;
    }

    if ($value > $maxElement) {
        $maxElement = $value;
    }
}

echo "min element: " . $minElement;
echo "\n";
echo "max element: " . $maxElement;
echo "\n";


sort($array);


echo "sort array: ";
print_r($array);

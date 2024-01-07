<?php
//функція для обчислення площі кола
function areaOfCircle($radius) {
    $pi = 3.14159;
    $area = $pi * $radius * $radius;
    return $area;
}

// Застосування
$radius = 5;
$square = areaOfCircle($radius);

// Виведення результату
echo "area of a circle $radius := $square.\n";

//...........................................................

// функція для піднесення до ступеня
function degree($number, $power) {
    $result = pow($number, $power);
    return $result;
}

//Застосування
$baseNumber = 2;
$exponent = 3;
$result = degree($baseNumber, $exponent);

// Виведення результату
echo "$baseNumber pow $exponent := $result.\n";

//............................................................



//функція для піднесення до ступеня та повернення нового числа
function degreeA($number, $power) {
    $resultA = pow($number, $power);
    return $resultA;
}

// Застосування функції та виведення результату
$baseNumberA = 2;
$exponentA = 3;
$resultA = degreeA($baseNumberA, $exponentA);
echo "return number: $resultA.\n";

//.................................................................


//  функція для піднесення до ступеня та зміни переданого числа
function degreeB(&$number, $power) {
    $number = pow($number, $power);
}

// Застосування
$baseNumberB = 2;
$exponentB = 3;
degreeB($baseNumberB, $exponentB);
echo "change: $baseNumberB.\n";


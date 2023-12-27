<?php
echo "Hello, what is your name? ";

$name = trim(fgets(STDIN));

echo "Hello,  $name 4\n";

echo "Enter two numbers:\n";

echo "Number 1 = ";
$number1 = trim(fgets(STDIN));

echo "Number 2 = ";
$number2 = trim(fgets(STDIN));

$sum = $number1 + $number2;
$average = $sum / 2;

echo "Sum = " . $sum . "\n";
echo "Average = " . $average . "\n";

<?php
echo 'enter number 1 to 6 : ';
$number = trim(fgetc(STDIN));
$number = intval($number);



$result = match ($number){
    1 =>'green',
    2 =>'red',
    3 =>'blue',
    4 =>'brown',
    5 =>'violet',
    6 =>'black',
    default => 'white'
};
echo "you choose color, $result\n";

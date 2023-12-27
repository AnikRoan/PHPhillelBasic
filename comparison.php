<?php

//int
echo "comparison integer\n";
$int1 = 5;
$int2 = '5';
var_dump($int1 == $int2);
var_dump($int1 === $int2);

echo "comparison integer + casting\n";
var_dump($int1==(int)$int2);
var_dump($int1===(int)$int2);


//bool
echo "comparison boolean\n";
$bool1 = true;
$bool2 = '1';
var_dump($bool1==$bool2);
var_dump($bool1===$bool2);

echo "comparison boolean + casting\n";
var_dump($bool1==(bool)$bool2);
var_dump($bool1===(bool)$bool2);


//string
echo "comparison string\n";
$str1 = 'Hello';
$str2 = 'World';
var_dump($str1==$str2);
var_dump($str1===$str2);


//float
echo "comparison float\n";
$float1 = 3.14;
$float2 = '3.14';
var_dump($float1 == $float2);
var_dump($float1 === $float2);

echo "comparison float + casting\n";
var_dump($float1 == (float)$float2);
var_dump($float1 === (float)$float2);


//null
echo "comparison null\n";
$null1 = null;
$null2 = '';
var_dump($null1 == $null2);
var_dump($null1 === $null2);







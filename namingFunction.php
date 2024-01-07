<?php

//функція з обов'язковими та необов'язковим параметрами
function multiplyAndInvoke($a, $b, $closure = null) {
    $result = $a * $b;


    if ($closure instanceof Closure) {

        $closure($result);
    }

    return $result;
}

// Анонімна функція, яка виводить переданий аргумент
$printResult = function($arg) {
    echo "result: $arg\n";
};

// Застосування іменованої функції без анонімної функції
$resultWithoutClosure = multiplyAndInvoke(5, 3);
echo "result: $resultWithoutClosure\n";

// Застосування іменованої функції з анонімною функцією
$resultWithClosure = multiplyAndInvoke(5, 3, $printResult);

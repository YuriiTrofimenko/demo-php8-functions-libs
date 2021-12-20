<?php
declare(strict_types = 1);
// include('./my-functions.php');
// require('./my-functions.php');
// require('./utils.php');
require_once('./my-functions.php');
require_once('./utils.php');
// 1
/* function myFoo1 () {
    echo "myFoo1\n";
    foreach (func_get_args() as $arg){
        echo $arg . "\n";
    }
}
// myFoo1();
myFoo1(10, 'Hello PHP Functions!', true);
myFoo1(10, 'Hello PHP Functions!', false); */

//2
/* function myFoo1 () {
    echo "myFoo1\n";
    function myFoo2 () {
        echo "myFoo2\n";
    }
    // myFoo2();
}

myFoo1();
myFoo2();

myFoo1(); */

// 3
// $x = 10;

/* function myFoo1 () {
    $x = 20;
    echo "Local x = $x\n";
    $x++;
    echo "Local x = $x\n";
}

myFoo1();
echo "Global x = $x\n"; */

/* function myFoo1 () {
    // $x++;
    echo "Local x = $x\n";
} */

/* function myFoo1 ($x) {
  // $x++;
  echo "Local x = $x\n";
}

myFoo1 ($x);
echo "Global x = $x\n"; */

/* function myFoo1 (&$x) {
    // $x = func_get_arg(0);
    $x = 20;
    echo "Local x = $x\n";
    $x++;
    echo "Local x = $x\n";
}

// myFoo1 ($x);
myFoo1 ($x);
echo "Global x = $x\n"; */

// 4
// $x = 10;

/* function myFoo1 () {
  global $x;
  $y = $x * 2;
  echo "Local y = $y";
  $x = 20;
  echo "Local x = $x\n";
  $x++;
  echo "Local x = $x\n";
}
myFoo1();
echo "Global x = $x\n"; */

/* function myFoo1 () {
  $x = &$GLOBALS['x'];
  $x = 20;
  echo "Local x = $x\n";
  $x++;
  echo "Local x = $x\n";
}

myFoo1 (1);
echo "Global x = $x\n";

// var_dump($GLOBALS); */

// 5

/* function multiply (int $x, int $y) : int {
    return $x * $y;
}
$result = multiply(3, 4);
echo "$result\n"; */


// 6 (closure)
/*
// js example
function parent () {
		const o = {counter: 0}
    console.log(`Parent fn`)
    return function () {
    	console.log(`Parent counter = ${o.counter++}`)
    }
}
console.log(`Global`)
const child = parent()
child()
child()
child()

*/

// incorrect
/* function parent (int $x) {
    $y = $x;
    $y++;
    return function () {
        global $y;
        echo $y;
        var_dump($y);
    };
}

$child = parent(10);
$child(); */

/*function parent (int $x) {
  // TODO добавить в массив $y элемент с ключем z,
  // значением которого будет квадрат числа из переменной $x
  $y = ['counter' => $x, 'z' => $x * $x];
  $y['counter'] = $y['counter'] + 1;
  return function () use ($y) {
    $y['counter'] = $y['counter'] + 1;
    $y['z'] = sin($y['z']);
    echo "{$y['counter']}, {$y['z']}\n"; // TODO заменить значение с ключем z на значение синуса от z
  };
}*/

// correct

$child = parent(10);
$child();
$child();
$child();
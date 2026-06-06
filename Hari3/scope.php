<?php
// $x = 5;

// function myTest() {
//     // global $x;
//     echo "Variabel x inside function is : $x\n";
// }

// myTest();
// echo "Variabel x outsied function is: $x\n";

/*function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();*/

/*$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y;*/

$x = 77;
$y = 3;

function myTest() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $z;

?>
<?php
// $x = 5;

// function myTest() {
//     // global $x;
//     echo "Variabel x inside function is : $x\n";
// }

// myTest();
// echo "Variabel x outsied function is: $x\n";

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>
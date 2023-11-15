<?php

//Built-in function - they are functions defined by PHP
//Developers have to use the functions since they are already created.


$s=sqrt(64);

echo "<h1>Your squareroot is $s</h1> <br>";

$t=tan(67);
echo "TAN IS $t<br>";


$c=cos(67);
echo "COS IS $c<br>";

$s=sin(120);
echo "SINE IS $s<br>";



$d=date("d-m-y h:m:s");

echo "THE DAY TODAY IS $d<br>";



//encrypt
$name="John";

$e=md5($name);

echo "YOUR PASSWORD IS $e";

//Given an array of 10 marks
$marks= array(45,67,89,45,56,56,34,78,78,56,45,67,45,45,45,45,32,11,44,55,44,33,54,44,33,22,33,22);

//which PHP function can we use to find sum in an array
//sum,sort

$s = array_sum($marks);
echo "$s";

$ans = $r/count($marks);







?>
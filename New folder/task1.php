
<?php
//An employee earns basic salary of 10000
//She also receives  a house allowance of 4000 and wter allowance of 3000
//Also some tax deductions are done ammounting to 1500

//GROSS PAY - BASIC PLUS ALLOWANCES

//NET PAY - GROSS MINUS DEDUCTIONS

$basic_s = 10000;
$house_a = 4000;
$water_a = 3000;
$deductions = 1500;
$gross = $basic_s+$house_a+$water_a;

echo "basic salary : $basic_s";
echo "<br><br>";
echo "house allowance : $house_a";
echo "<br><br>";
echo "water allowance : $water_a";
echo "<br><br>";
echo "deductions : $deductions";


echo "<h2>";
echo "GROSS PAY = $gross";
echo "</h2>";
echo "<br><br>";

$net = $gross-$deductions;

echo "<h2>";
echo "NET PAY= $net";
echo "</h2>";



?>















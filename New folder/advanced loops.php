<?php 

//nested loops-A loop inside another one
//simple triangle
for ($i=0; $i < 100; $i++) { 
	echo "	* ";// prints downwards because of the break
	for ($m=0; $m <=$i ; $m++) { 
    echo " * ";//prints horizontally
	}//inner
	echo "<br>";
}//outer


//above every time the outer loop 
//runs the inner loop goes 10 times






 ?>
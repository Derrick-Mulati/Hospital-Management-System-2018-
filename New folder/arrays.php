<?php
//Array-storing many values in a single variable.
function Prac()
{
	$marks = array(67,67,45,34,34,89,56,56,56);
	//pull out array values
	//count from zero
	echo "I got $marks[5]";
	echo "He got $marks[8]";

	$total =$marks[4]+$marks[7];
	echo "GOT $total";

}//end
Prac()//Use your function




?>
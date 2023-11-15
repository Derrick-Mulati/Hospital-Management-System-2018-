<!DOCTYPE html>
<html>
<head>
	<title>VARIABLES</title>
</head>
<body>
	<?php
	//VARIABLES
	//a variable should have an identifier /name 
	//the name should have a $ at the start
	//After the name provide the value to store
	$marks_e = 78;
	$marks_k =  67;
    $marks_s =  67;
    $marks_m =  77;
    $marks_r =  89;


    //variables name rukes
    //1. no spacing,use underscore not hyphen
    //2. Don't start with a number, you ncan end with a number
    //3.CASE SENSITIVE
    //ECHO THE VARIABLES
    echo "ENGLISH=$marks_e";
    echo "<br><br>";
     echo "KISWAHILI=$marks_k";
     echo "<br><br>";
      echo "SCIENCE=$marks_s"; 
      echo "<br><br>";
       echo "MATHEMATICS=$marks_m";
       echo "<br><br>";
        echo "RELIGIOUS STUDIES=25$marks_r";


        //ADDITION
        //create a new var to store the answer
        $sum = $marks_r+$marks_m+$marks_s+$marks_k+$marks_e;
        //to use html tag inside php ,echo html tags
        echo "<br>";
        echo "<h1>";
       		 echo "Congrats! your total marks= $sum";
        echo "</h1>";

        //GET AVERAGE MARK 
        $ave=$sum/5;
        echo "Average mark=$ave";
        //SUBTRACT TOTAL - AVERAGE
		echo "<br><br>";
        $sub=$sum-$ave;
        echo "Subtract=$sub";







 



    ?>
</body>
</html>
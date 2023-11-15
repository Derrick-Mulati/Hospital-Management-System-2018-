<!DOCTYPE html>
<html>
<head>
	<title>MY POINTS SYSTEM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head >
<body bgcolor="orange" class="text-center"> 
	

	<h1 class="jumbotron">MY POINTS SYSTEM</h1>
	<form method="POST">
		<input type="number" name="points" placeholder="Enter Your Points">
		<br><br>
		<input type="Submit" name="" class="btn btn-danger">
	</form>

</body>
</html>











<?php
//when  a user clicks on submit,php will recieve the posted points
//the recieved  are saved on a different var '$points'
$points =$_POST['points'];//equation 

echo "<h1>YOUR POINTS ARE $points</h1>";

if ($points < 100) {
	echo "<h2>YOU DO NOT QUALIFY FOR THE SERVICE";
} 

//multiple condition

elseif ($points >=100 and $points < 500) {
	echo "<h3>YOU GET A FREE 50MB DATA</h3> ";
	
}

elseif ($points >=501 and $points < 600 ) {
	echo "<h3>YOU GET OPPO CAMERA</h3> ";
	
} 

elseif ($points >=1000 and $points < 5000) {
	echo "<h3>YOU GET A NEW HOME</h3> ";
	
}

else {

	echo "<h2>YOU QUALIFY! CONGRADULATION</h2>";
}

//if else , works for 1 condition




?>
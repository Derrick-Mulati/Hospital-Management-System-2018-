












<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
	<h1 class="jumbotron">Add new patients</h1>
	<a href="doctors.php" class="btn btn-success">BACK</a></div><br><br>












	<form method="POST">
		<input type="text" name="patient_id" placeholder="Enter patient_ID No."><br><br>

	
		<input type="date" name="dob"><br><br>

		<input type="text" name="fname" placeholder="Enter 1st Name"><br><br>


		<input type="text" name="lname" placeholder="Enter Last Name"><br><br>

		Select gender<br>
		<input type="radio" name="gender" value="Male">Male 
		<input type="radio" name="gender" value="Female">Female
		<br><br>
		
		<input type="submit" name="OK" class="btn-warning">
	</form>

</body>
</html>


<?php
//stop if user has not entered anything
if (empty($_POST)) {
	exit();
} 

$patient_id =$_POST['patient_id'];
$dob =$_POST['dob'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$gender =$_POST['gender'];
$reg_date = date("Y/m/d h:m:s");
//Connect to your database

$conn =mysqli_connect("localhost","root","","hospital_db");

$res = mysqli_query($conn,"INSERT   INTO patient VALUES ('$patient_id','$dob','$fname','$lname','$gender','$reg_date')");

//RUN

if ($res==true) {
	echo "<h1>Thank you.Patient $fname $lname Added succesfully</h1>";

}
 else {
 	echo "<h1>Something is wrong! Retry</h1>";
 }//end


?>

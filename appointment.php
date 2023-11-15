



<!DOCTYPE html>
<html>
<head>
	<title>APPPOINTMENT</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
	<h1 class="jumbotron">Book appointment</h1>
	<a href="doctors.php" class="btn btn-success">BACK</a><br><br>













	<form method="POST">
		<input type="text" name="patient_id" placeholder="Enter patient_id No."><br><br>

		<input type="text" name="weight" placeholder="Enter patient's weight"><br><br>


		<input type="text" name="temperature" placeholder="Enter patient's temperature"><br><br>

		<input type="text" name="blood_pressure" placeholder="Enter patient's blood_pressure"><br><br>

		<textarea name="description" rows= "3" cols="3" class="form-control" placeholder="Enter patient's descriptions"></textarea><br>


		
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
$weight =$_POST['weight'];
$temperature =$_POST['temperature'];
$description =$_POST['description'];
$blood_pressure =$_POST['blood_pressure'];
$reg_date = date("Y/m/d h:m:s");
//Connect to your database

$conn =mysqli_connect("localhost","root","","hospital_db");

$res = mysqli_query($conn,"INSERT   INTO appointment VALUES ('$patient_id','$weight','$temperature','$description','$blood_pressure','$reg_date')");

//RUN

if ($res==true) {
	echo "<h1>Thank you.Appointment booked succesfully</h1>";

}
 else {
 	echo "<h1>Something is wrong!? Retry</h1>";
 }//end


?>

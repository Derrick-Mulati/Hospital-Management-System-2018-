<?php 
session_start();
//check  if a user didnt set a session in login
if (!isset($_SESSION['x'])) {
	echo "<h1>ACCESS DENIED! <br><br> LOGIN</h1>";
	echo "<br>";
	echo "<a href=index.php>LOGIN HERE</a>";
	exit();//stop code execution
}
//if there exist a session , echo the session
else{
	$email =$_SESSION['x'];//pull out email stored in the session
	


}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Delete patient </title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">
</head>
<body class="text-center">
<h1 class="jumbotron alert-info">DELETE PATIENT</h1>
<a href="admin.php" class="btn btn-success">BACK</a><br><br>
<div>
	
<form method="POST">
	<input type="text" name="patient_id" placeholder="Enter patient ID to DEL" required="">
	<br><br>
	<input type="Submit" name="OK" class="btn-warning" onclick="return confirm('Are you sure you want to delete patient?');" >
</form><br><br>
</body>
</html>
<?php 
//get patient id from the form
$patient_id = $_POST['patient_id'];

//establish connection from apple db
$conn = mysqli_connect("localhost","root","","hospital_db");
//check if the patient exist before delete
$res = mysqli_query($conn, "SELECT * FROM patient WHERE  patient_id = '$patient_id'");
//$res returns 1 or 0 records/row
if (mysqli_num_rows($res) ==0) {
	echo "The patient doesn't exist";
}
else {
	//there is a record/row
	//fetch the found record
	while($colms = mysqli_fetch_array($res)){           //we are fetching a row,we get an array of columns =$colms
	echo "Patient ID is $colms[0] <br>";
	echo "DOB is $colms[1] <br>";
	echo "First name is $colms[2] <br>";
	echo "Last name is $colms[3] <br>";
	echo "Gender is $colms[4] <br>";
	echo "Was Registration date is $colms[5] <br><hr><br>";

	$res1 = mysqli_query($conn,"DELETE FROM patient WHERE patient_id='$patient_id'");
	if ($res1==true){
		echo "<h1>Above  patient of ID $patient_id has been removed successfully</h1>";
	}

	else {
		echo "Something went wrong!";
	}
}//end while  -while loops other rows if any
}//end
 ?>
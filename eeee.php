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
	echo "<h3>LOGGED IN AS : $email <br> Welcome </h3>";


}

 ?>









<!DOCTYPE html>
<html>
<head>
	<title>Admins page </title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">
</head>
<body class="text-center">
<h1 class="jumbotron alert-info">ADMINISTATOR</h1>
<div>
	
<a href="medicine.php" class="btn btn-warning">ADD MEDICINE</a>
<a href="" class="btn btn-dark">ADD DOCTOR</a>
<a href="patient report.php" class="btn btn-success">PATIENT REPORT</a>
<a href="" class="btn btn-info">MEDICAL REPORT</a>
<a href="deletepatient.php" class="btn btn-danger">DELETE PATIENT</a>
<a href="search.php" class="btn btn-warning">SEARCH PATIENT</a>
<a href="medicine.php" class="btn btn-basic">ADD STAFF</a>
<a href="medicine.php" class="btn btn-primary">ADD SUPPLIER</a>
<a href="logout.php" class="btn btn-success">LOG OUT</a></div>
<br><br>
<form method="POST">
	<input type="text" name="fname" placeholder="Enter patient First name" required="">
	<br><br>
	<input type="text" name="lname" placeholder="Enter patient Last name" required="">
	<br><br>

	<input type="Submit" name="OK" class="btn-warning">
</form><br><br>
</body>
</html>
<?php 

if (empty($_POST)) {
	exit();
} 

//get patient id from the form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
//establish connection from apple db
$conn = mysqli_connect("localhost","root","","hospital_db");
//below query looks for a matching patient id
$res = mysqli_query($conn, "SELECT * FROM patient WHERE fname = '$fname' AND lname ='$lname'");
//$res returns 1 or 0 records/row
if (mysqli_num_rows($res) ==0) {
	echo "No result for patient $fname";
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
	echo "Registration date is $colms[5] <br><hr><br>";
}//end while  -while loops other rows if any
}//end
 ?>







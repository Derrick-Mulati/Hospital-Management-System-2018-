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
	<a href="logout.php" class="btn btn-success">LOG OUT</a></div><br><br>
	
<a href="medicine.php" class="btn btn-warning">ADD MEDICINE</a>
<a href="add doctor.php" class="btn btn-dark">ADD DOCTOR</a>
<a href="patient report.php" class="btn btn-success">PATIENT REPORT</a>
<a href="deletepatient.php" class="btn btn-danger">DELETE PATIENT</a>
<a href="search.php" class="btn btn-warning">SEARCH PATIENT</a>
<a href="staff.php" class="btn btn-basic">ADD STAFF</a>
<a href="supplier.php" class="btn btn-primary">ADD SUPPLIER</a>
<a href="payments.php" class="btn btn-dark">PAYMENTS</a>

<br><br>

</body>
</html>


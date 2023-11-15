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
	<title>Patient Search </title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
<h1 class="jumbotron">SEARCH PATIENT</h1>

<a href="admin.php" class="btn btn-success">BACK</a><br><br>



<form method="POST">
	<input type="text" name="patient_id" placeholder="Enter patient id to search" required="">
	<br><br>
	<input type="Submit" name="OK" class="btn-warning">
</form><br><br>









<script src="B4/js/jquery-3.3.1.js"></script>
<script src="B4/js/bootstrap.js"></script>
 <script src="anim/js/jquery-2.1.1.min.js"></script>      
  <script src="anim/js/bootstrap.min.js"></script>   
  <script src="anim/js/parallax.min.js"></script>  
  <script src="anim/js/wow.min.js"></script>  
  <script src="anim/js/jquery.easing.min.js"></script>  
  <script src="anim/js/fliplightbox.min.js"></script>  
  <script src="anim/js/functions.js"></script> 
</body>
</html>

<?php 
if (empty($_POST)) {
	exit();
} 

//get patient id from the form
$patient_id = $_POST['patient_id'];
//establish connection from apple db
$conn = mysqli_connect("localhost","root","","hospital_db");
//below query looks for a matching patient id
$res = mysqli_query($conn, "SELECT * FROM patient WHERE patient_id ='$patient_id'");
//$res returns 1 or 0 records/row
if (mysqli_num_rows($res) ==0) {
	echo "No result for patient $patient_id";
}
else {
	//there is a record/row
	//fetch the found record
	$colms = mysqli_fetch_array($res);//we are fetching a row,we get an array of columns =$colms
	echo "Patient ID is $colms[0] <br>";
	echo "DOB is $colms[1] <br>";
	echo "First name is $colms[2] <br>";
	echo "Last name is $colms[3] <br>";
	echo "Gender is $colms[4] <br>";
	echo "Registration date is $colms[5] <br>";
}//end



 ?>
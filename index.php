<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center" background="hopng">
	<h1 class="jumbotron">ADMIN  LOGIN </h1>

<br><br>
<form method="POST">


	     <input type="email" name="email" placeholder="Enter Email"><br><br>
		<input type="password" name="password" placeholder="Enter password"><br><br>
		  
        <input type="submit" name="ok" class="btn btn-warning" value="LOGIN"><br><br>

</form>



<a href="register.php">SIGN UP</a><br><br>







<script src="B4/js/jquery-3.3.1.js"></script>
<script src="B4/js/bootstrap.js"></script>

</body>
</html>



<?php

if (empty($_POST)) {
	exit();
} 

$conn = mysqli_connect("localhost","root","","hospital_db");
//filter out SQL 




$email=mysqli_real_escape_string($conn,$_POST['email']);

$password=mysqli_real_escape_string($conn,$_POST['password']);


if(empty($email)) {
echo "Email is empty"; exit();
}


if (empty($password)) {
echo "Password is empty"; exit();
}

//encrypt passwsord
$salt = '$2a$07$R.gjb2U2N.FmZ4hPp1y2CN$';
$newpass = crypt($password, $salt);
//connect DB



$res = mysqli_query($conn,"SELECT * FROM users WHERE email ='$email' AND password = '$newpass'");
//I parse the $newpass
//finally,we check if $res 0 or 1, check for match

if (mysqli_num_rows($res) < 1) {//count $res
	echo "No match. Login failed";
	
}

else{
	echo "Match Found. Login Successful";
//START SESSION
	session_start(); //ACTIVATE PHP SESSION
	$_SESSION['x'] =$email; //we store email as a session

	header("location:admin.php");
}//end

?>
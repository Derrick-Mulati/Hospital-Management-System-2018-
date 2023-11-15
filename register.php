
 <!DOCTYPE  html>
<html>
<head>
	<title>Register admin</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
	<h1 class="jumbotron">CREATE ADMINS ACCOUNT</h1>

<br><br>
<form method="POST">
	    <input type="email" name="email" placeholder="Enter Email"><br><br>
		<input type="text" name="username" placeholder="Enter username"><br><br>
		<input type="password" name="password" placeholder="Enter password"><br><br>
		<input type="password" name="confirm_password" placeholder="Confirm password"><br><br>
        <input type="submit" name="ok" class="btn btn-warning">

</form>




<a href="index.php">LOGIN</a><br><br>

</body>
</html>


<?php

if (empty($_POST)) {
	exit();
} 

$username =$_POST['username'];
$password =$_POST['password'];                       
$email=$_POST['email'];                       
$confirm_password =$_POST['confirm_password'];                       

if(empty($username)){
	echo "USERNAME IS EMPTY"; exit();//STOP
}


if(empty($password)){
	echo "PASSWORD IS EMPTY"; exit();//STOP
}

if(empty($email)){
	echo "EMAIL IS EMPTY"; exit();//STOP
}


if($password <> $confirm_password) {
	echo "YOUR PASSWORD DO NOT MATCH."; exit(); //STOP

}

// CHECK FOR THE PASSWORD LENGTH
if (strlen($password) < 8) {
	echo "YOUR PASSWORD MUST BE ATLEAST 8 CHARACTERS"; exit();
}

//check password strength
if (!preg_match("#[0-9]+#", $password)) {
	echo "YOUR PASSWORD MUST HAVE A NUMBER";  exit();
}


if (!preg_match("#[A-z]+#", $password)) {
	echo "YOUR PASSWORD MUST HAVE A CAPITAL LETTER";  exit();
}


if (!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $password)) {
echo "YOUR PASSWORD MUST INCLUDE SPECIAL CHARACTER";
exit();
}


$salt = '$2a$07$R.gjb2U2N.FmZ4hPp1y2CN$';
$newpass = crypt($password, $salt);

//Connect to your database

$conn = mysqli_connect("localhost","root","","hospital_db");

$res = mysqli_query($conn,"INSERT INTO `users`(`username`, `password`, `confirm_password`, `email`) VALUES  ('$username','$newpass','$confirm_password','$email')");

//RUN

if ($res==true) {
	echo "<h1>Thank you.Users $username was added succesfully.</h1>";

}
 else {
 	echo "<h1>Something is wrong! Please Try Again</h1>";
 }//end


?>

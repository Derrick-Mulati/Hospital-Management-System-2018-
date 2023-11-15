 
 <!DOCTYPE  html>
<html>
<head>
	<title>Register Doctor</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
	<h1 class="jumbotron">ADD DOCTOR</h1>
	<a href="admin.php" class="btn btn-success">BACK</a><br>

<br><br>
<form method="POST">

	    <input type="text" name="doctor_ID" placeholder="Enter doctor_ID"><br><br>
		<input type="text" name="name" placeholder="Enter name"><br><br>
		<input type="text" name="experience" placeholder="Enter years of experience"><br><br>
		<input type="text" name="salary" placeholder="Enter salary"><br><br>
		<input type="text" name="role" placeholder="Enter role"><br><br>
			Select gender<br>
		<input type="radio" name="gender" value="Male">Male 
		<input type="radio" name="gender" value="Female">Female
		<br><br>
        <input type="submit" name="ok" class="btn btn-warning">

</form>

</body>
</html>




<?php

if (empty($_POST)) {
	exit();
} 
$doctor_ID =$_POST['doctor_ID'];
$name =$_POST['name'];
$experience =$_POST['experience'];
$salary =$_POST['salary'];
$role =$_POST['role'];
$gender =$_POST['gender'];


                    
if(empty($doctor_ID)){
	echo "doctor_ID is EMPTY"; exit();//STOP
}

if(empty($name)){
	echo "name is EMPTY"; exit();//STOP
}

if(empty($experience)){
	echo "experience is EMPTY"; exit();//STOP
}

if(empty($salary)){
	echo "salary is EMPTY"; exit();//STOP
}

if(empty($role)){
	echo "role is EMPTY"; exit();//STOP
}

if(empty($gender)){
	echo "gender is EMPTY"; exit();//STOP
}



//CONNECT TO THE DATABASE


$conn = mysqli_connect("localhost","root","","hospital_db");

$res = mysqli_query($conn,"INSERT INTO `doctors`(`doctor_ID`, `name`, `experience` , `salary` , `role` , `gender`) VALUES  ('$doctor_ID','$name','$experience','$salary','$role','$gender')");

//RUN

if ($res==true) {
	echo "<h1>Thank you.Dr. $name was added succesfully.</h1>";

}
 else {
 	echo "<h1>Something is wrong! Please Try Again</h1>";
 }//end



?>
 
 <!DOCTYPE  html>
<html>
<head>
	<title>Register Staff</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
	<h1 class="jumbotron">ADD A STAFF</h1>
	<a href="admin.php" class="btn btn-success">BACK</a><br><br>

<br><br>
<form method="POST">

	   
		<input type="text" name="staff_ID" placeholder="Enter staff_ID"><br><br>
		<input type="text" name="name" placeholder="Enter name"><br><br>
		<input type="text" name="location" placeholder="Enter Department"><br><br>
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


$staff_ID =$_POST['staff_ID'];
$name =$_POST['name'];
$location =$_POST['location'];
$role =$_POST['role'];
$gender =$_POST['gender'];  


                    
if(empty($staff_ID)){
	echo "staff_ID is EMPTY"; exit();//STOP
}

if(empty($name)){
	echo "name is EMPTY"; exit();//STOP
}

if(empty($location)){
	echo "location is EMPTY"; exit();//STOP
}

if(empty($gender)){
	echo "gender is EMPTY"; exit();//STOP
}

if(empty($role)){
	echo "role is EMPTY"; exit();//STOP
}



$conn = mysqli_connect("localhost","root","","hospital_db");

$res = mysqli_query($conn,"INSERT INTO `staff`(`staff_ID`, `name` , `location` , `role` , `gender`) VALUES  ('$staff_ID','$name','$location,'$role','$gender')");

//RUN

if ($res==true) {
	echo "<h1>Thank you.Staff $name was added succesfully.</h1>";

}
 else {
 	echo "<h1>Something is wrong! Please Try Again</h1>";
 }//end



?>
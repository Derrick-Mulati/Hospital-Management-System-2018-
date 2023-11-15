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
	<title>MEDICINE</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">
</head>
<body class="text-center">
	<h1 class="jumbotron">Add medicine</h1>
	<a href="admin.php" class="btn btn-success">BACK</a><br><br>

	<form method="POST">
		<input type="text" name="drug_id" placeholder="Enter drug_id"><br><br>
		<input type="text" name="name" placeholder="Enter the name"><br><br>
		<input type="text" name="brand" placeholder="Enter the brand"><br><br>
		<input type="text" name="quantity" placeholder="Enter quantity"><br><br>
		<input type="date" name="exp_date" placeholder="Enter the exp_date"><br><br>




		
		<input type="submit" name="OK" class="btn-warning">
	</form>

</body>
</html>

<?php

if (empty($_POST)) {
	exit();
}

$drug_id =$_POST['drug_id'];
$name =$_POST['name'];
$brand =$_POST['brand'];
$quantity =$_POST['quantity'];
$exp_date =$_POST['exp_date'];
$reg_date = date("Y/m/d h:m:s");
//Conect to your database

                    
if(empty($drug_id)){
	echo "Drug_ID is EMPTY"; exit();//STOP
}

if(empty($name)){
	echo "Name is EMPTY"; exit();//STOP
}

if(empty($brand)){
	echo "Brand is EMPTY"; exit();//STOP
}

if(empty($quantity)){
	echo "Quantity is EMPTY"; exit();//STOP
}

if(empty($exp_date)){
	echo "Exp_date is EMPTY"; exit();//STOP
}


$conn =mysqli_connect("localhost","root","","hospital_db");


$res = mysqli_query($conn,"INSERT   INTO `medicine`(`drug_id`, `name`, `brand`, `quantity`, `exp_date`, `reg_date`) VALUES ('$drug_id','$name','$brand','$quantity','$exp_date','$reg_date')");
//RUN

if ($res==true) {
	echo "<h1>Thank you.Drug $name  Added succesfully</h1>";

}
 else {
 	echo "<h1>Something is wrong! Retry</h1>";
 }//end




?>

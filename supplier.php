 
 <!DOCTYPE  html>
<html>
<head>
	<title>Register Supplier</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
	<h1 class="jumbotron">ADD A SUPPLIER</h1>
	<a href="admin.php" class="btn btn-success">BACK</a><br><br>

<br><br>
<form method="POST">

	    <input type="text" name="supplier_ID" placeholder="Enter supplier_ID"><br><br>
		<input type="text" name="name" placeholder="Enter name"><br><br>
		<input type="text" name="location" placeholder="Enter location"><br><br>
		<input type="text" name="contacts" placeholder="Enter contacts"><br><br>
        <input type="submit" name="ok" class="btn btn-warning">

</form>

</body>
</html>




<?php

if (empty($_POST)) {
	exit();
} 
$supplier_ID =$_POST['supplier_ID'];
$name =$_POST['name'];
$location =$_POST['location'];
$contacts =$_POST['contacts'];


                    
if(empty($supplier_ID)){
	echo "supplier_ID is EMPTY"; exit();//STOP
}

if(empty($name)){
	echo "name is EMPTY"; exit();//STOP
}

if(empty($location)){
	echo "location is EMPTY"; exit();//STOP
}

if(empty($contacts)){
	echo "contacts is EMPTY"; exit();//STOP
}




$conn = mysqli_connect("localhost","root","","hospital_db");

$res = mysqli_query($conn,"INSERT INTO `Suppliers`(`supplier_ID`, `name`, `location` , `contacts`) VALUES  ('$supplier_ID','$name','$location','$contacts')");

//RUN

if ($res==true) {
	echo "<h1>Thank you.Supplier $name was added succesfully.</h1>";

}
 else {
 	echo "<h1>Something is wrong! Please Try Again</h1>";
 }//end



?>
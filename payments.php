
 <!DOCTYPE  html>
<html>
<head>
	<title>Payments</title>
		<link rel="stylesheet" type="text/css" href="B4/css/bootstrap.css">

</head>
<body class="text-center">
	<h1 class="jumbotron">PATIENTS PAYMENTS</h1>

<a href="admin.php" class="btn btn-success">BACK</a><br><br>

<br>
<form method="POST">
		<input type="text" name="patient_ID" placeholder="Enter patient_ID"><br><br>
		<input type="text" name="payment_ID" placeholder="Enter payment_ID"><br><br>
		<input type="text" name="Amount_paid" placeholder="Enter Amount_paid"><br><br>
		<input type="date" name="Pay_day" placeholder="Enter Pay_day"><br><br>
		<input type="text" name="Mode" placeholder="Enter Payment Mode"><br><br>
    

        <input type="text" name="Reason" placeholder="Enter Reason"><br><br>
        <input type="submit" name="ok" class="btn btn-warning">

</form>

</body>
</html>




<?php

if (empty($_POST)) {
	exit();
} 

$patient_ID =$_POST['patient_ID'];
$payment_ID =$_POST['payment_ID'];
$Amount_paid =$_POST['Amount_paid'];
$Pay_day =$_POST['Pay_day'];
$Mode =$_POST['Mode'];                       
$Reason =$_POST['Reason'];                       
                    

if(empty($patient_ID)){
	echo "patient_ID IS EMPTY"; exit();//STOP
}


if(empty($payment_ID)){
	echo "payment_ID IS EMPTY"; exit();//STOP
}


if(empty($Amount_paid)){
	echo "Amount_paid IS EMPTY"; exit();//STOP
}

if(empty($Pay_day)){
	echo "Pay_day IS EMPTY"; exit();//STOP
}

if (empty($Mode)) {
	echo "Mode IS EMPTY"; exit();// STOP
}

if (empty($Reason)) {
	echo "Reason IS EMPTY"; exit();// STOP
}





//Connect to your database

$conn = mysqli_connect("localhost","root","","hospital_db");

$res = mysqli_query($conn,"INSERT INTO `Payments`(`patient_ID`, `payment_ID`, `Amount_paid`, `Pay_day`, `Mode`, `Reason`) VALUES  ('$patient_ID','$payment_ID','$Amount_paid','$Pay_day','$Mode','$Reason')");

//RUN

if ($res==true) {
	echo "<h1>Thank you.Payment $payment_ID was succesfully.</h1>";

}
 else {
 	echo "<h1>Something is wrong! Please Try Again</h1>";
 }//end
?>
<!DOCTYPE html>
<html>
<head>
	<title>MY POINTS SYSTEM</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body bgcolor="orange" class="text-center">
	<h1 class="jumbotron" >MY POINTS SYSTEM</h1>
	<form method="POST">
		<input type="number" name="num1" placeholder="Enter Your Points">
		<br><br>
		<input type="number" name="num2" placeholder="Enter other points">
        <br><br>
        <input type="submit" name="" class="btn btn-danger">   
</form>


<?php 

$num1=$_POST['num1'];
$num2=$_POST['num2'];

if ($num1>$num2) {
echo "<h2><mark>Number 1</mark> Is larger than<mark>Number 2</mark></h2>";
}
elseif ($num1<$num2) {
echo "<h2><mark>NUMBER 2</mark>IS LARGER THAN<mark>NUMBER 1</mark></h2>";
}
else{echo"<h2>ENTER<mark>NUMBER 1</mark>AND<mark>NUMBER 2</mark></h2>";
}





















 ?>
</body>
</html>
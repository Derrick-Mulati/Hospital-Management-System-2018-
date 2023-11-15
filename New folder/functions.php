<?php 

// functions are a block of code that can accept an input , process , output
//we can have many functions in one php file

function Home()
{//start 
  echo "WELCOME HOME";

}//ends

function Welcome()
{
echo "WELCOME TO PHP FUNCTIONS ";

}//ends here

//once created functions must be used
function Sum()
{
$x=50;
$y=70;
$addition = $x  + $y;
echo "<h2>WE GET $addition </h2>";

}

Sum();




function Area($b,$h)
{
	//$h ,$b are unknown
	$c=0.5;
	$soln=$c*$b*$h;
	echo "THE AREA IS $soln";


}//end

Area(3,6);
// create a fuction to find the area of a circle

function AreaC

















 ?>
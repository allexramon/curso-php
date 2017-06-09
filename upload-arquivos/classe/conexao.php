<?php 

$conn = new mysqli("localhost","root", "", "arquivo");
if ($conn->connect_error){
	echo "Error: ".$conn->connect_error;
}




 ?>
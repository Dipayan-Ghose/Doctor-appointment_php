<?php

$servername= "localhost";
$username="root";
$password="";
$dbname="doctordb";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("connection failed");
}
//echo "Connection Success";

?>	
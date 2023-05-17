<?php
include("connect.php");


$fname= val($_POST["fname"]);
$lname= val($_POST["lname"]);
$email= val($_POST["email"]);
$email= val($_POST["category"]);
$id= val($_POST["id"]);

function val($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

$sql= "UPDATE info SET firstname='$fname', lastname='$lname', email='$email', category='$category' WHERE id='$id'";

$result= $conn->query($sql);
 if($result===TRUE){
	 echo"updated Successfully";
 }
 else{
	 echo"nothing"; 
 }
header('location:index.php');
$conn->close(); 
	
?>
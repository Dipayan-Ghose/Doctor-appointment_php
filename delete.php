<?php
include('connect.php');

$id= $_GET["id"];

$sql="DELETE FROM info WHERE id='$id'";

if($conn->query($sql)===TRUE){
	header ('location:show.php?message=delete');
	
}
else{
	echo "No data";
}
$conn->close();
?>


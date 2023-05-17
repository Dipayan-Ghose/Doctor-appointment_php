<?php
include('connect.php');

echo"<br>connected<br>";


$id= val($_POST["id"]);
$fname= val($_POST["fname"]);
$lname= val($_POST["lname"]);
$email= val($_POST["email"]);
$category= val($_POST["category"]);


function val($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

$sql= "INSERT INTO info (id,firstname,lastname,email,category) values('$id','$fname','$lname','$email','$category')";

$result=$conn->query($sql);
if($result=== TRUE){
	echo "New record created";
}
else{
	echo "Nothing";
}

header ('location: show.php');

$conn->close();

?>
<html>
<head></head>
<body>
<br>


</body>
</html>
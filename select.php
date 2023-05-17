<?php 

include('connect.php');

echo "<br>Connected<br>";
 

$sql= "SELECT id, firstname, lastname, email, category FROM info";
$result= $conn->query($sql);

if($result-> num_rows>0) {


	while($row= $result-> fetch_assoc()){
		echo "<br>ID: " .$row["id"]. "<br> Name: " .$row["firstname"]. " " .$row["lastname"]. " <br>Email: " .$row["email"]. "<br>Category: " .$row["category"]. "<br>";	
	}

}
else{
	echo "No Result";
}
$conn->close();
?>

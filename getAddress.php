<?php

$conn = new mysqli('localhost:3308', 'root', '', 'addressbook');

if($conn->connect_errno) {
	printf("Connection Failed: %s\n", $conn->connect_error);
	exit;
}


$query = 'SELECT * FROM contacts';
//get result
$result = mysqli_query($conn,$query);
//get allpost in array
$contacts = mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($contacts);
?>
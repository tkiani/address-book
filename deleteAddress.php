<?php

$conn = new mysqli('localhost:3308', 'root', '', 'addressbook');

if($conn->connect_errno) {
	printf("Connection Failed: %s\n", $conn->connect_error);
	exit;
}


if(isset($_POST['deleteId'])){
	$id = $_POST['deleteId'];

	$query = "DELETE FROM contacts WHERE id=$id";

	if(mysqli_query($conn, $query)){
		echo json_encode(array(
			"success" => true
	  ));
	}
	else{
		echo json_encode(array(
			"success" => false
	  ));
	}
}

?>
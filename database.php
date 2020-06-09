<?php

$conn = new mysqli('localhost:3308', 'root', '', 'addressbook');

if($conn->connect_errno) {
	printf("Connection Failed: %s\n", $conn->connect_error);
	exit;
}

?>
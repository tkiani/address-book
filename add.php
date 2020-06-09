<?php

$conn = new mysqli('localhost:3308', 'root', '', 'addressbook');

if($conn->connect_errno) {
	printf("Connection Failed: %s\n", $conn->connect_error);
	exit;
}

if(isset($_POST['firstName'])&&isset($_POST['lastName'])&&isset($_POST['phoneNumber'])&&isset($_POST['email'])){
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName =  mysqli_real_escape_string($conn,$_POST['lastName']);
    $phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
    $email =     mysqli_real_escape_string($conn,$_POST['email']);
    $type =      mysqli_real_escape_string($conn,$_POST['type']);


$query = "INSERT INTO contacts(firstName, lastName, phoneNumber, email, type) VALUES('$firstName','$lastName','$phoneNumber','$email','$type')";    
  
if(mysqli_query($conn, $query)){
    echo "user added";
}
else{
    echo 'Errot: '.mysqli_error($conn);   
}

}

?>
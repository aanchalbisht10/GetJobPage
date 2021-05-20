<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$gender = $_POST['gender'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstname, lastname, email, phonenumber, gender) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $firstname, $lastname, $email, $phonenumber, $gender);
		$stmt->execute();
		echo "Registration Completed...";
		$stmt->close();
		$conn->close();
	}
?>
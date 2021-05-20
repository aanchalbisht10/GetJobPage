<!DOCTYPE html>
<html>
<head>
	<title> Sign up Form </title>
	<link rel="stylesheet" type="text/css" href="stylemn.css">
</head>
<body>
	<div class="loginbox">
	<img src="logo1.jpg" class="avatar">
		<h1> SignUp Here</h1>
		<form method="POST" action="">
			<p> Firstname</p>
			<input type="text" placeholder="Enter Firstname" name="firstName" id="firstName">
            <p> Lastname</p>
            <input type="text" placeholder="Enter Lastname" name="lastName" id="lastName">
            <p> Password</p>
			<input type="password" placeholder="Enter Password" name="password" id="password">
			<p> Confirm Password</p>
			<input type="password" placeholder="Enter Confirm Password" name="cpassword" id="cpassword">
			<input type="submit" value="SignUp" name="signup" id="signup">
			<a href="#"> Lost your password?</a>
			<br>
			<a href="#"> Don't have an account?</a>

		</form>
	</div>
</body>
</html>

<?php

if(isset($_POST['signup']))
{
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$con = mysqli_connect('localhost', 'root', '','connect');
$sql = "INSERT INTO table_connect VALUES 
('0', '$firstName', '$lastName', '$password', '$cpassword')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted Successfully";
}
}

?>
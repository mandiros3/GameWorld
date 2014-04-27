<?php

$link = mysql_connect("localhost", "snov", "sn4mlc5");
mysql_select_db("snov");

if (isset($_POST['submit'])) {

	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$UserName = $_POST['UserName'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$ConfirmPassword = $_POST['ConfirmPassword'];

	if ($FirstName == '') {
		echo "<script>alert('Please enter your first name!')</script>";
		exit();
	}

	if ($LastName == '') {
		echo "<script>alert('Please enter your last name!')</script>";
		exit();
	}

	if ($UserName == '') {
		echo "<script>alert('Please enter your username!')</script>";
		exit();
	}

	if ($Email == '') {
		echo "<script>alert('Please enter your email address!')</script>";
		exit();
	}

	if ($Password == '') {
		echo "<script>alert('Please enter your password!')</script>";
		exit();
	}

	if ($ConfirmPassword == '') {
		echo "<script>alert('Please confirm your password!')</script>";
		exit();
	}

	if ($_POST['Password'] != $_POST['ConfirmPassword']) {
		echo "<script>alert('Your passwords did not match.')</script>";
		exit();
	}

	$check_username = "select * from registered_users where UserName='$UserName'";

	$run = mysql_query($check_username);

	if (mysql_num_rows($run) > 0) {
		echo "<script>alert('Username $UserName is already exist in our database, Plesae enter a different username')</script>";
		exit();
	}

	$query = "insert into registered_users (FirstName, LastName, UserName, Email, Password, ConfirmPassword) values ('$FirstName', '$LastName', '$UserName', '$Email', '$Password', '$ConfirmPassword')";
	if (mysql_query($query)) {

		echo "<script>window.open('welcome.php','_self')('Registration Successful')</script>";
	}
}
?>
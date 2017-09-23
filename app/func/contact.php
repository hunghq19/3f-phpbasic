<?php 

function contact_insert($name, $email, $phone, $message) {

	global $conn;
	$result = false;

	$name = mysqli_real_escape_string($conn, $name);
	$email = mysqli_real_escape_string($conn, $email);
	$phone = mysqli_real_escape_string($conn, $phone);
	$message = mysqli_real_escape_string($conn, $message);
	
	$sql = "INSERT INTO contacts (name, email, phone, message, status) VALUES ('{$name}', '{$email}', '{$phone}', '{$message}', 0)";
	if (mysqli_query($conn, $sql)) {
		$result = true;
	} else {
		$result = false;
	}

	return $result;

}


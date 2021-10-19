<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'dummycoffee');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$first_name = mysqli_real_escape_string($mysqli, $_POST['first_name']);
$last_name = mysqli_real_escape_string($mysqli, $_POST['last_name']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//VALIDATION

if (strlen($first_name) < 2) {
    echo 'first_name';
} else if (strlen($last_name) < 2) {
    echo 'last_name';
} else if (strlen($email) <= 4) {
    echo 'eshort';
} else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} else if (strlen($password) <= 4) {
    echo 'pshort';
	
//VALIDATION
	
} else {
	
	//PASSWORD ENCRYPT
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	
	$query = "SELECT * FROM members WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO members (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$spassword')");

			if ($insert_row) {

				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['first_name'] = $first_name;
				$_SESSION['last_name'] = $last_name;

				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}

?>
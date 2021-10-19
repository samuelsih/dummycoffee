<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$mysqli = new mysqli('localhost', 'root', '', 'dummycoffee');

if($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}

//inserting in MySQL
//jika num_row < 1, berarti email belum ada di system database
$query = "SELECT * FROM members WHERE email='$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


if($num_row >= 1) {

    //decrypt ulang password yang sudah di bcrypt di adduser.php
    if(password_verify($password, $row['password'])) {
        
        $_SESSION['login'] = $row['id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        echo 'true';
    }

    else {
        echo 'false';
    }

}

else {
    echo 'false';
}

?>
<?php


$mysqli = new mysqli('localhost', 'root', '', 'dummycoffee');

if($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}

//dapatkan isi dari contact.php
//jangan lupa prevent sql injection
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$email = mysql_real_escape_string($mysqli, $_POST['email']);
$message = mysql_real_escape_string($mysqli, $_POST['message']);


//real email section
//masukkan email sebagai yang ingin dijadikan subjek pengiriman
$real_email = 'samsihotang02@gmail.com';
$subject = "Email from Dummy Coffee User.";



//validation section
if(strlen($name) < 5) {
    echo 'name_short';
}

else if(strlen($name) > 50) {
    echo 'name_long';
}

else if(strlen($email) < 15) {
    echo 'email_short';
}

else if(strlen($email) > 50) {
    echo 'email_long';
}

else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'email_format';
}

else if(strlen($message) > 100) {
    echo 'message_long';
}

else if(strlen($message) < 5) {
    echo 'message_short';
}


//jika lolos validasi, masuk ke PHPMailer
else {
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer();

    $mail->isSMTP(); //set mailer untuk memakai SMTP
    $mail->Host = 'smtp.gmail.com'; //specify main dan backup smtp server nya
    $mail->SMTPAuth = true; //enable SMTP authentication

    //Harus menggunakan gmail suite
    //Tidak memberikan nilai pada username dan password, karena berbahaya

    $mail->Username = ''; //SMTP Username
    $mail->Password = ''; //SMTP Password
    $mail->SMTPSecure = 'tls'; //untuk menyalakan enkripsi. Sekarang pakai tls (ssl juga boleh)
    $mail->Port = 587; //port

    $mail->addReplyTo($email);
    $mail->From = $real_email;
    $mail->FromName = $name;
    $mail->addAddress('', 'Admin'); //recipient

    $mail->isHTML(true); //set email format nya HTML boi

    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'Ini body dalam bentuk plain text untuk non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    }

    else echo 'true';

}

?>
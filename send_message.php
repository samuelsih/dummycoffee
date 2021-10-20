<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


//dapatkan isi dari contact.php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


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

else {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'samuelhotang02@gmail.com';  // SMTP Username
        //sorry tapi password nya dihapus hehe
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('samsihotang02@gmail.com', 'Testing123');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Dummy Coffe got a message from $name";
        $mail->Body    = "<p>" . $message . "</p>";

        $mail->send();
        echo 'true';

    }       
    
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>


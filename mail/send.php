<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'meet46884@gmail.com';
    $mail->Password = 'crkjdseliotlpsgz';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('meet46884@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = "Course Enquiry";
    $mail->Body = "We'v got your enquiry related the ".$_POST['course']." Course";    

    $mail->send();

    echo
    "
    <script>
    alert('Sent successfully');
    document.location.href = '../enquiry.php';
    </script>
    ";

}

?>
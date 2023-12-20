<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';

if(isset($_POST["submit"])) {
    
    if(!empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["messages"])) {

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth= true;
        $mail->Username = 'brenyaeric19@gmail.com';
        $mail->Password = 'zsdrbotpttfvaxbk';
        $mail->SMTPSecure ='ssl';
        $mail->Port = 465;

        $mail->setFrom('brenyaeric19@gmail.com');
        $mail->addAddress($_POST["email"]);
        $mail->isHTML(true);

        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["messages"];

        if($mail->send()) {
            header('Location:sendtest.php');
            exit();
        } 
            else {
                header('Location: failedtest.php?error=' . urlencode($mail->ErrorInfo));
                exit(); // Make sure to exit after sending the header
            }
        } else {
            header('Location: failedtest.php?error=fields');
            exit(); // Make sure to exit after sending the header
        }
    }
?>


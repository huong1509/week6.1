<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

    if(isset($_POST['message'])){
        $title = "contact us";
        $subject = 'a msg from users to admin';
        $message = $_POST['message'];

        try {

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;

            $mail->Username = 'huongnsgch230101@fpt.edu.vn';
            $mail->Password = 'apmexvqtgjqjhxxs'; 

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587; 
            
            $mail->setFrom('huongnsgch230101@fpt.edu.vn', 'Huong Nguyen');
            $mail->addAddress('nguyenhuong150905@gmail.com', 'huong nguyen');
            
            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject'; 
            $mail->Body = ''.$message.''; 
            
            $mail->send(); 
            $output = '<h1> Message has been sent </h1>'; 
        } catch (Exception $e) { 
            $output = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $title = 'contact us';
        ob_start();
        include '../templates/mailform.html.php';
        $output = ob_get_clean();
    }
    
include '../templates/layout.html.php';
?>
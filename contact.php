<?php
if (isset($_POST['message'])) {
    $title = "Contact Us";
    $message = $_POST['message'];

    ini_set("SMTP", "tuanphamdk504@gmail.com");
    ini_set("sendmail_from", "tuanphamdk504@gmail.com");

    mail("tuanphamdk504@gmail.com", "Mail Test", $message);

    $output = "Thank you for your message. We will get back to you shortly.";
} else {
    $title = "Contact Us";

    ob_start();
    include 'templates/mailform.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';

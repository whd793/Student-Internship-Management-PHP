<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   //  $mail->SMTPDebug = 2;                                       // Enable verbose debug output
   $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'leew0529@gmail.com';                     // SMTP username
            $mail->Password   = 'Pstudio0529?';                              // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
           //  $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress('leew0529@gmail.com');               // Name is optional
           //  $mail->addReplyTo('info@example.com', 'Information');
           //  $mail->addCC('cc@example.com');
           //  $mail->addBCC('bcc@example.com');
        
            // Attachments
           //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
           //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Internship Review '. $_GET['first_name'] .' '. $_GET['last_name'] .'';
            $mail->Body    = 'Here is the link to review student:';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
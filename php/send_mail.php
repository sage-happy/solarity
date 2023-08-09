<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\STMP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/STMP.php';
    
    $mail = new PHPMailer(true);
try{
    //configure the SMTP settings
    $mail-> STMPDebbug=SMTP::DEBUG_SERVER;
    $mail-> isSTMP();
    $mail-> Host = 'smtp.gmail.com';
    $mail-> Port = 465;
    $mail-> SMTPSecure = 'ssl';
    $mail-> SMTPAuth = true;
    $mail-> Username = 'happymatekenya123@gmail.com';
    $mail-> Password = 'saramikehappy';

    //set Recipient details
    $mail->setFrom($_POST['email'], $_POST['name']); //sender
    $mail->addAddress('happymatekenya123@gmail.com','Happy Matekenya'); //receipient 
    $addReplyTo('happymatekenya123@gmail.com', $_POST['name']);
    //Attachments
    $mail->addAttachment(''); //Add attachments

    //Content
    $mail->isHTML(true);
    $mail->Subject=$_POST['subject']; 
    $mail->Body=$_POST['message'];

    //send the email address
    $mail->send();
    echo 'Email sent successfully';
}catch(Exception $e){
        echo 'Error: '. $mail->ErrorInfo;      
    }
?>
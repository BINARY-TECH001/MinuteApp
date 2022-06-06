<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($receiver_email=null,$receiver_name=null,$subject=null,$body=null){
    if($receiver_email != null && $receiver_name != null && $subject != null && $body != null){
            $username = "minuteapplication@gmail.com";
            $password = "ademola12";

            require "../PHPMailer/Exception.php";
            require "../PHPMailer/PHPMailer.php";
            require "../PHPMailer/SMTP.php";
            
            $mail = new PHPMailer(true);

            try{
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->SMTPDebug = 0;
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $username;                     //SMTP username
                $mail->Password   = $password;                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($username, "MinuteApplication Admin");
                $mail->addAddress($receiver_email, $receiver_name);     //Add a recipient
                $mail->addReplyTo('noreply@gmail.com', 'No reply');
                
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $body;
                $mail->AltBody = strip_tags($body);

                $mail->send();
                return '<script>alert("Message has been sent")</script>';

            } catch (Exception $e) {
                return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        return "No paramater passed!";
    }
}
?>

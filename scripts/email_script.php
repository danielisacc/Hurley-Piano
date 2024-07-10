<?php
    // PHP namespaces being used
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    // Required paths to those classes
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Require the config file
    require 'config.php';

    /**
     * [The function uses the PHPMailer object to send an email to the address we specify]
     * @param [string] $email,      [Where the email goes]
     * @param [string] $subject,    [The email's subject]
     * @param [string] $message,    [The message of the email]
     * @param [boolean] $debug.     [Set debug as true]
     * @return [string]             [Error message, or success]
     */
    function sendMail($email, $subject, $message, $debug) {
        // Creating a new PHPMailer object
        $mail = new PHPMailer(true);

        // Using th SMTP protocol to send the email
        $mail->isSMTP();

        $mail->SMTPDebug = $debug;

        /*
        Setting the SMTPAuth property to true, so we can use our Gmail login
        details to send the mail.
        */
        $mail->SMTPAuth = true;

        /*
        Setting the Host property to the MAILHOST
        value that we defined in the config file.        
        */
        $mail->Host = MAILHOST;

        /*
        Set the username property to the USERNAME
        value defined in the config file
        */
        $mail->Username = USERNAME;

        /*
        Set the password property to the PASSWORD
        value defined in the config file
        */
        $mail->Password = PASSWORD;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->Port = 587;

        $mail->setFrom(SEND_FROM, SEND_FROM_NAME);

        $mail->addAddress($email);

        $mail->addReplyTo(REPLY_TO,REPLY_TO_NAME);

        $mail->isHTML(true);

        $mail->Subject = $subject;

        $mail->Body = $message;

        $mail->AltBody = $message;


        try {
            $mail->send();
            echo"success";
        }
        catch (Exception $e) {
            echo"Message could not be sent. Mailer error: {$mail->ErrorInfo}";
        }
    }
?>
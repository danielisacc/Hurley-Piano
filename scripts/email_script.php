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

    // Define the Gmail's smtp server
    define('MAILHOST', $mailHost);

    // Define as a username the email that yoy yse in your gmail account
    define('USERNAME', $mailUsername);

    // Define your 16 digit Gmail app password.
    define('PASSWORD', $mailPass);

    // Define the email address from which the email is sent
    define('SEND_FROM', $mailSendFrom);

    // Define the name of the website from which the email is sent
    define('SEND_FROM_NAME', $mailSendFromName);

    // Define the reply to address
    define('REPLY_TO', $mailReplyTo);

    // Define the reply to name
    define('REPLY_TO_NAME', $mailReplyToName);

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
        }
        catch (Exception $e) {
        }
    }
?>
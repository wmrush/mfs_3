<?php

namespace App\Libs;


use PHPMailer\PHPMailer\PHPMailer;

class Mail
{


    public function SendEmail($Email, $Subject, $Text)
    {
        if (file_exists(ROOT_DIR . "/app/config/email.php")) {
            $Config = require ROOT_DIR . "/app/config/email.php";
        }
        $mail = new PHPMailer();

        $mail->SMTPDebug = 0;                                        // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host = $Config['server'];  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $mail->Username = $Config['login'];                     // SMTP username
        $mail->Password = $Config['pass'];                               // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $Config['port'];                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($Config['login'], 'Administrator');
        $mail->addAddress($Email);     // Add a recipient


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $Subject;
        $mail->Body = $Text;

        $mail->send();
    }


}
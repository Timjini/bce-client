<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class PHPCustomMailer
{

    public $contactData;
    public $htmlContent;
    public $to;

    public function sendEmail($to, $htmlContent)
    {
        $mail = new PHPMailer(true);
        info("HTML Content: " . $htmlContent);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            // debugging
            // $mail->SMTPDebug = true;
            $mail->Host       = env('EMAIL_SMTP');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('ADMIN_EMAIL');
            $mail->Password   = env('ADMIN_EMAIL_SECRET');
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = env('EMAIL_PORT');
            
            //Recipients
            $mail->setFrom(env('ADMIN_EMAIL'), env('BRAND_NAME'));
            $mail->addAddress($to);     //Add a recipient
            // $mail->addAddress($contactData['email']);               //Name is optional
            $mail->addReplyTo(env('ADMIN_EMAIL'), 'Thank you for contacting Us');

            //Content
            $mail->isHTML(true); 
            $mail->Subject = 'Contact Information';
            $mail->Body    = $htmlContent;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            true;
        } catch (Exception $e) {
            info("Ooopsss something happened n/" . $mail->ErrorInfo );
            false;
        }
    }
}

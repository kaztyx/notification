<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    private $mail = \stdClass::class;

    public function __construct()
    {

        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host = 'mail.ingraphics.com.br';               // Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $this->mail->Username = 'webmaster@ingraphics.com.br';          // SMTP username
        $this->mail->Password = 'ÿtgdtdgdtgdggdgt';                      // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption;
        $this->mail->Port = 587;                                    // TCP port to connect to, use 465 for
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);

        //Recipients
        $this->mail->setFrom('valdir@ingraphics.com.br', 'InGraphics Soluções e Imagens');
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}
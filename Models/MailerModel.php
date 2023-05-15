<?php
class MailerModel {
    private $mail;

    public function __construct() {
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';
        require 'includes/Exception.php';

        $this->mail = new PHPMailer(true);
        $this->mail->CharSet = "UTF-8";
        $this->mail->isSMTP();
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->Port = "587";
        $this->mail->Username = 'csumii1010@gmail.com';
        $this->mail->Password = 'yjhuazsqoakxgahz';
    }

    public function sendMail($sendnm, $sendml, $getnm, $getml, $subject, $message) {
        $this->mail->Subject = $subject;
        $this->mail->setFrom($sendml, $sendnm);
        $this->mail->Body = $message;
        $this->mail->addAddress($getml, $getnm);

        if ($this->mail->send()) {
            return true;
        } else {
            throw new Exception("Mailer Error: " . $this->mail->ErrorInfo);
        }
    }
}

?>
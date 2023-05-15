<?php
// 寄信功能的 Controller
class MailController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function sendMail() {
        // 取得表單資料
        $sendnm = $_POST['sendname'];
        $sendml = $_POST['sendmail'];
        $getnm = $_POST['getname'];
        $getml = $_POST['getmail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // 將資料儲存到模型中
        $this->model->setSenderName($sendnm);
        $this->model->setSenderEmail($sendml);
        $this->model->setReceiverName($getnm);
        $this->model->setReceiverEmail($getml);
        $this->model->setSubject($subject);
        $this->model->setMessage($message);

        // 執行寄信功能
        if ($this->model->send()) {
            // 寄信成功，顯示訊息
            $message = 'Message has been sent';
        } else {
            // 寄信失敗，顯示錯誤訊息
            $message = 'Error: ' . $this->model->getError();
        }

        // 將訊息傳遞給 View
        $view = new MailView();
        $view->setMessage($message);
        $view->render();
    }
}

// 寄信功能的 Model
class MailModel {
    private $senderName;
    private $senderEmail;
    private $receiverName;
    private $receiverEmail;
    private $subject;
    private $message;
    private $error;

    public function setSenderName($name) {
        $this->senderName = $name;
    }

    public function setSenderEmail($email) {
        $this->senderEmail = $email;
    }

    public function setReceiverName($name) {
        $this->receiverName = $name;
    }

    public function setReceiverEmail($email) {
        $this->receiverEmail = $email;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function send() {
        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";

        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";

        $mail->Username = 'csumii1010@gmail.com';
        $mail->Password = 'yjhuazsqoakxgahz';

        $mail->Subject = $this->subject;
        $mail->setFrom($this->senderEmail, $this->senderName);
        $mail->Body = $this->message;
        $mail->addAddress($this->receiverEmail, $this->receiverName);

        if ($mail->send()) {
            // 寄信成功，回傳 true
            return true;
        } else {
            // 寄信失敗，儲存錯誤訊息並
?>

<?php 

namespace App\Controllers;
use App\Models\MailerModel;

require '../../PHPMailer/includes/PHPMailer.php';
require '../../PHPMailer/includes/SMTP.php';
require '../../PHPMailer/includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// class Home extends BaseController
// {
// 	public function index()
// 	{
// 		echo '<h1>Hello<h1>';
// 	}

//     public function create()
// 	{
// 		echo '<h1>hi<h1>';
// 	}
// }

// 寄信功能的 Controller
class Home extends BaseController {
    // private $model;

    // public function __construct($model) {
    //     $this->model = $model;
    // }
	public function index()
	{
		
		$mail = new PHPMailer();
        $mail->CharSet = "UTF-8";

        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";

        $mail->Username = 'csumii1010@gmail.com';
        $mail->Password = 'yjhuazsqoakxgahz';

        $mail->Subject ='123';
        $mail->setFrom('csumii1010@gmail.com');
        $mail->Body = '123';
        $mail->addAddress('csumii1010@gmail.com');

        if ($mail->send()) {
            // 寄信成功，回傳 true
            echo 'ok';
        } else {
            echo '寄信失敗，儲存錯誤訊息並';
		}
	}
	// public function sendMail() {
    //     // 取得表單資料
    //     // $sendnm = $_POST['sendname'];
    //     // $sendml = $_POST['sendmail'];
    //     // $getnm = $_POST['getname'];
    //     // $getml = $_POST['getmail'];
    //     // $subject = $_POST['subject'];
    //     // $message = $_POST['message'];

    //     // 將資料儲存到模型中
    //     $this->model->setSenderName($sendnm);
    //     $this->model->setSenderEmail($sendml);
    //     $this->model->setReceiverName($getnm);
    //     $this->model->setReceiverEmail($getml);
    //     $this->model->setSubject($subject);
    //     $this->model->setMessage($message);

    //     // 執行寄信功能
    //     if ($this->model->send()) {
    //         // 寄信成功，顯示訊息
    //         $message = 'Message has been sent';
    //     } else {
    //         // 寄信失敗，顯示錯誤訊息
    //         $message = 'Error: ' . $this->model->getError();
    //     }

    //     // 將訊息傳遞給 View
    //     $view = new MailView();
    //     $view->setMessage($message);
    //     $view->render();
    // }
}
   


// 寄信功能的 Model
// class MailModel {
//     private $senderName;
//     private $senderEmail;
//     private $receiverName;
//     private $receiverEmail;
//     private $subject;
//     private $message;
//     private $error;

//     public function setSenderName($name) {
//         $this->senderName = $name;
//     }

//     public function setSenderEmail($email) {
//         $this->senderEmail = $email;
//     }

//     public function setReceiverName($name) {
//         $this->receiverName = $name;
//     }

//     public function setReceiverEmail($email) {
//         $this->receiverEmail = $email;
//     }

//     public function setSubject($subject) {
//         $this->subject = $subject;
//     }

//     public function setMessage($message) {
//         $this->message = $message;
//     }

// }

    // public function send() {
    //     $mail = new PHPMailer();
    //     $mail->CharSet = "UTF-8";

    //     $mail->isSMTP();
    //     $mail->Host="smtp.gmail.com";
    //     $mail->SMTPAuth = true;
    //     $mail->SMTPSecure = "tls";
    //     $mail->Port = "587";

    //     $mail->Username = 'csumii1010@gmail.com';
    //     $mail->Password = 'yjhuazsqoakxgahz';

    //     $mail->Subject = $this->subject;
    //     $mail->setFrom('csumii1010@gmail.com');
    //     $mail->Body = $this->message;
    //     $mail->addAddress('csumii1010@gmail.com');

    //     if ($mail->send()) {
    //         // 寄信成功，回傳 true
    //         return true;
    //     } else {
    //         寄信失敗，儲存錯誤訊息並
	// 	}
	// }
?>

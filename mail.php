<?php


    require_once('class.phpmailer.php');
    include("class.smtp.php");

    if (count($_POST) > 0) {
        $subject = 'Bánh Tráng Tây Ninh 94';
        $message = 'Tên: ' . $_POST['name'] . '<br>';
        $message .= 'Email: ' . $_POST['email'] . '<br>';
        $message .= 'Địa chỉ: ' . $_POST['address'] . '<br>';
        $message .= 'Tin nhắn: ' .$_POST['message'];

        $mail = new PHPMailer;
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port = 587; //465                  // set the SMTP port for the GMAIL server
        $mail->Username = "noreplyemail88@gmail.com";  // GMAIL username
        $mail->Password = "vietnam123hcm";            // GMAIL password
        $mail->SetFrom('noreplyemail88@gmail.com', 'No Reply');
        $mail->AddReplyTo("noreplyemail88@gmail.com", "No Reply");
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->IsHTML(true);
        $address1 = "nongtranngoc@gmail.com";
        $mail->AddAddress($address1, "Tran Ngoc Nong");

        try {
            $mail->Send();
            $alert_mail = 'Cảm ơn bạn đã liên hệ với chúng tôi, chúng tôi sẽ liên hệ với bạn trong vòng 24h.';
        } catch (phpmailerException $e) {
            $alert_mail = "Mail bị lỗi chưa gửi được vui lòng thử lại" . $e->errorMessage();
        } catch (Exception $e) {
            $alert_mail = "Mail bị lỗi chưa gửi được vui lòng thử lại" . $e->getMessage();
        }
        echo $alert_mail;
    }
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
            $mail = new PHPMailer();
            $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
            $mail->isSMTP();
            $mail->isHTML(true);

            $mail->Host = 'sd-2104702-l.dattaweb.com';
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Username = 'noresponder@generalroca.gob.ar';
            $mail->Password = 'X9Nya/B0oZ';
            $mail->setFrom('noresponder@generalroca.gov.ar', 'Solicitud');


?>            
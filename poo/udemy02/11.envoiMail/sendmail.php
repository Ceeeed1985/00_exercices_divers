<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');

$mail = new PHPMailer(true);
$mail->isSMTP();                                    // Specifier que PHPMailer utilise le protocole SMTP (Simple Mail Transfert Protocol)
$mail->Host = 'smtp.gmail.com';                     // Spécifier le serveur gmail
$mail->SMTPAuth   = true;                           // Pour activer l'authentification
$mail->Username   = 'cedrictruyen@gmail.com';
$mail->Password   = 'secret';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port       = 587;
$email->charSet = "utf-8";

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
$mail->addAddress('ellen@example.com');               //Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');
<?php 
$email = $_POST['email'];
$text = $_POST['text'];

$email = htmlspecialchars($email);
$text = htmlspecialchars($text);

$email = urldecode($email);
$text = urldecode($text);

$email = trim($email);
$text = trim($text);

if (mail("reidris08@gmail.com", "Заявка с сайта", "Коментар:".$text.". E-mail: ".$email ,"From: reidris08@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";


 ?>

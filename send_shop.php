<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_phone['phone'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$fio = urldecode($fio);
$email = urldecode($email);
$phone = urldecode($phone);
$fio = trim($fio);
$email = trim($email);
$phone = trim($phone);


if (mail("david.adamchik69@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: OnlyCoffee@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>


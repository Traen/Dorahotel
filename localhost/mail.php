<?php
    $to = "tohoteldora@mail.ru";
    $from = trim($_POST['email']);
    $subject = 'Отзыв';

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);
    
    $iniziali = htmlspecialchars($_POST['iniziali']);
    $iniziali = urldecode($iniziali);
    $iniziali = trim($iniziali);

    $email = htmlspecialchars($_POST['email']);
    $email = urldecode($email);
    $email = trim($email);

    $headers = "From: $from" . "\r\n" .
    "Reply-to: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $iniziali, $message, $email)) {
        echo 'Письмо отправлено' ;
    } else {
        echo 'Письмо не отпралено. ОШИБКА' ;
    }
?>
<?php
/*
 * @PHP Mail send functions
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

require_once('config.php');

$from = $_POST['email']; 
$to = ADMIN_EMAIL; # @-пошта, для відправлення зямовлень на бронювання номеру
$name = $_POST['name']; 
$phone = $_POST['phone'];
$subject = 'Замовлення через сторінку номеру готелю - Osonnya.com';
$msg = '<html><body><center><img src="';
$msg .= SITE_URL . 'images/logo-header.png" style="max-width: 100%"></center>';
$msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$msg .= '<tr style="background: #eee;"><td><strong>Ім’я:</strong> </td><td>'."$name".'</td></tr>'; // $name через "" для інтерпретації;
$msg .= "<tr><td><strong>Номер телефону:</strong> </td><td>$phone</td></tr>";
$msg .= "<tr><td><strong>Дата заїзду:</strong> </td><td>$_POST[arrive]</td></tr>";
$msg .= "<tr><td><strong>Дата виїзду:</strong> </td><td>$_POST[departure]</td></tr>";
$msg .= "<tr><td><strong>Дорослих:</strong> </td><td>$_POST[adults]</td></tr>";         
$msg .= '<br></body></html>';

$headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if(mail($to, $subject, $msg, $headers)){
    echo '<p class="room-reservation-confirm">Дякуємо Вам за запит на бронювання. Ми перевіремо наявність і зв’яжемось з вами як можна швидше.</p>';
}else{
    echo '<p class="room-reservation-error">Сталася помилка під час надсилання листа. Спробуйте пізніше.</p>';
}
?>
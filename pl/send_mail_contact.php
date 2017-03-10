<?php
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Can be configure by code
 *
 */

require_once('config.php');

$to = ADMIN_EMAIL;
$from = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$msg = '<html><body><center><img src="';
$msg .= SITE_URL . 'images/logo-header.png" style="max-width: 100%"></center>';
$msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$msg .= '<tr style="background: #eee;"><td><strong>Ім’я:</strong> </td><td>'."$name".'</td></tr>'; // $name через "" для інтерпретації;
$msg .= "<tr><td><strong>e-mail:</strong> </td><td>$from</td></tr>";
$msg .= "<tr><td><strong>Тема повідомлення:</strong> </td><td>$subject</td></tr>";         
$msg .= "<tr><td><strong>Повідомлення:</strong> </td><td>$message</td></tr>";
$msg .= '<br></body></html>';

if ($subject == null) { exit }
$headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $msg, $headers)){
    echo '<p class="reservation-confirm">Дякуємо що написали нам.</p>';
}else{
    echo '<h2>Помилка надсилання листа.</h2>';
}
?>
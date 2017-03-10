<?php 
/**
 * @Site: Ossonya.com
 * @Copyright © 2016 Eldaeron
 * @Конфігураційний файл
 *
 */

define('SITE_URL', 'http://localhost/Eldaeron/osonnya_project/');
define('SITE_RU', 'http://localhost/Eldaeron/osonnya_project/ru/');
define('SITE_EN', 'http://localhost/Eldaeron/osonnya_project/en/');
define('SITE_PL', 'http://localhost/Eldaeron/osonnya_project/pl/');
define('ADMIN_EMAIL', 'eldaeron@localhost'); // е-Mail для відправки усієї пошти з сайту...

if(!isset($PAGE_TITLE)) {
    $PAGE_TITLE = 'Готельно-Відпочинковий комплекс «Осоння Карпати»'; // Якщо не задано титул сайта виводимо
}
if(!isset($PAGE_URL)) {
    $PAGE_URL = ''; // Якщо не задано URL сайта, пропускаємо переклад 
}

?>